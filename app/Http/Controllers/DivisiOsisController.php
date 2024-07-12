<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class DivisiOsisController extends Controller
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
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisi $divisi)
    {
        $divisi = Anggota::getJoin()->where('nama_organisasi', 'osis')
        ->where('divisis.slug', $divisi->slug)
        ->get();
        $title = "Admin Update Divisi Osis";
        return view('admin.profil.admin-update-divisi-osis',[
            "title" => "Data Angkatan",
            "active" => "angkatan",
            "divisi" => $divisi,
            "title" => $title,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        $validated = $request->validate([
            'deskripsi_divisi' => 'required',
            'gambar_divisi' => 'image',
            'deskripsi_divisi' => 'required',
        ]);
        // pengecekan ada atau tidak imgae
        // ddd("halo");
        if($request->file('gambar_divisi')){
            //pengecekan gambar baru untuk ganti gambar lama
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            // get file
            $validated['gambar_divisi'] = $request->file('gambar_divisi')->store('image-anggota');
        }
        // create from validateddata
        Divisi::where('id_divisi', $divisi->id_divisi)
        ->update($validated);
        //return to page before
        return redirect(URL::to('/admin-osis/'))
        ->with('messageslert', 'Data Berhasil Dirubah!')->with('class', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        //
    }
}
