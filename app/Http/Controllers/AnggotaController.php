<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Angkatan;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Kelas;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class AnggotaController extends Controller
{
    // public function getJoin(){
    //     $anggota =
    //     Anggota::join('divisis', 'anggotas.id_divisi', '=', 'divisis.id_divisi')
    //         ->join('jabatans', 'anggotas.id_jabatan', '=', 'jabatans.id_jabatan')
    //         ->join('organisasis', 'anggotas.id_organisasi', '=', 'organisasis.id_organisasi');
    //     return $anggota;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create query joining all table baed on id and select just nama_jabatan is ketua or koordinator and nama_oganisasi is osis
        $osis = Anggota::getJoin()->where('nama_organisasi', 'osis')
        ->where(function($query) {
            $query->where('jabatans.id_jabatan', 1)
                  ->orWhere('jabatans.id_jabatan', 2);
        });

        // create query count all row group by id_divisi
        $count = Anggota::getJoin()->where('nama_organisasi', 'osis')
        ->groupBy('divisis.id_divisi')
        ->selectRaw('count(*) as count, divisis.id_divisi');

        // create query left joining $osis and $count based by id_divisi
        $osis = $osis->leftJoinSub($count, 'count', function ($join) {
            $join->on('anggotas.id_divisi', '=', 'count.id_divisi');
        })
        ->get();
        $title = "Admin Osis";
        return view('admin.profil.admin-osis',[
            "title" => "Data Anggota",
            "active" => "anggota",
            "anggota" => $osis,
            "title" => $title,
            // angkatan dan divisi
            "angkatan" => Angkatan::all(),

        ]);
    }
    public function osisDivisi($slug){
        $anggota = Anggota::getJoin()->where('nama_organisasi', 'osis')
        ->where('divisis.slug', $slug)
        ->get();
        $title = "Admin Profil Divisi";
        return view('admin.profil.admin-profil-divisi-osis',[
            "title" => "Data Anggota",
            "active" => "anggota",
            "anggota" => $anggota,
            "title" => $title,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $anggota = Anggota::getJoin()->where('nama_organisasi', 'osis')
        ->where('divisis.slug', $slug)
        ->get();
        $jabatan = Jabatan::all();
        $title = "Admin Tambah Anggota Divisi Osis";
        return view('admin.profil.admin-tambah-anggota-divisi-osis',[
            "title" => "Data Anggota",
            "active" => "anggota",
            "jabatan" => $jabatan,
            "kelas" => Kelas::all(),
            "anggota" => $anggota,
            "title" => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('gambar_anggota')->store('image-anggota');
        $validated = $request->validate([
                'id_angkatan' => 'required',
                'id_divisi' => 'required',
                'id_jabatan' => 'required',
                'id_organisasi' => 'required',
                'nama_anggota' => 'required',
                'id_kelas' => 'required',
                'instagram_anggota' => 'required',
                'gambar_anggota' => 'required|image',
        ]);
        // dd($request->file('gambar_anggota'));
        // pengecekan ada atau tidak imgae
        if($request->file('gambar_anggota')){
            // get file
            $validated['gambar_anggota'] = $request->file('gambar_anggota')->store('image-anggota');
        }
        
        // create from validateddata
        Anggota::create($validated);
        //return to page before
        return redirect(URL::to('/admin-profil-divisi-osis/'. Divisi::findSlug($request->id_divisi)))
        ->with('messageslert', 'Data Berhasil Ditambahkan!')->with('class', 'success');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        $anggota = Anggota::getJoin()
        ->where('anggotas.id_anggota', $anggota->id_anggota)
        ->get();
        $title = "Admin Edit Anggota Divisi Osis";
        return view('admin.profil.admin-update-anggota-divisi-osis',[
            "title" => "Data Anggota",
            "active" => "anggota",
            "anggota" => $anggota,
            "title" => $title,
            "jabatan" => Jabatan::all(),
            "divisi" => Divisi::all(),
            "kelas" => Kelas::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        $validated = $request->validate([
            'id_divisi' => 'required',
            'id_jabatan' => 'required',
            'id_organisasi' => 'required',
            'id_kelas' => 'required',
            'nama_anggota' => 'required',
            'id_kelas' => 'required',
            'instagram_anggota' => 'required',
            'gambar_anggota' => 'image',
        ]);
        // pengecekan ada atau tidak imgae
        if($request->file('gambar_anggota')){
            //pengecekan gambar baru untuk ganti gambar lama
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            // get file
            $validated['gambar_anggota'] = $request->file('gambar_anggota')->store('image-anggota');
        }
        // create from validateddata
        Anggota::where('id_anggota', $anggota->id_anggota)
        ->update($validated);
        //return to page before
        return redirect(URL::to('/admin-profil-divisi-osis/'. Divisi::findSlug($request->id_divisi)))
        ->with('messageslert', 'Data Berhasil Dirubah!')->with('class', 'warning');
        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        if($anggota->gambar_anggota){
            Storage::delete($anggota->gambar_anggota);
        }
        Anggota::destroy($anggota->id_anggota);
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan')
        ->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
    }
}
