<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class AngkatanOsisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function show(Angkatan $angkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Angkatan $angkatan)
    {
        $angkatan = Angkatan::where('angkatans.id_angkatan', $angkatan->id_angkatan)
        ->get();
        $title = "Admin Update Osis";
        return view('admin.profil.admin-update-osis',[
            "title" => "Data Angkatan",
            "active" => "angkatan",
            "angkatan" => $angkatan,
            "title" => $title,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angkatan $angkatan)
    {
        $validated = $request->validate([
            'nama_angkatan' => 'required',
            'gambar_angkatan' => 'image',
            'visi_angkatan' => 'required',
            'misi_angkatan' => 'required',
        ]);
        // pengecekan ada atau tidak imgae
        // ddd("halo");
        if($request->file('gambar_angkatan')){
            //pengecekan gambar baru untuk ganti gambar lama
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            // get file
            $validated['gambar_angkatan'] = $request->file('gambar_angkatan')->store('image-anggota');
        }
        // create from validateddata
        Angkatan::where('id_angkatan', $angkatan->id_angkatan)
        ->update($validated);
        //return to page before
        return redirect(URL::to('/admin-osis/'))
        ->with('messageslert', 'Data Berhasil Dirubah!')->with('class', 'warning');
        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angkatan  $angkatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Angkatan $angkatan)
    {
        //
    }
}
