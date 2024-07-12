<?php

namespace App\Http\Controllers;

use App\Models\JurnalOsis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class AdminJurnalOsisController extends Controller {
    public function index() {
        $dataJurnal = JurnalOsis::latest()->paginate(5);
        $title = "Admin Jurnal Osis";
        return view('admin.jurnal.admin-jurnalosis', compact(['dataJurnal', 'title']))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function add() {
        $title = "Admin Tambah Jurnal Osis";
        return view('admin.jurnal.admin-tambahjurnal', compact('title'));
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|min:5|max:255|unique:jurnal_oses',
            'deskripsi' => 'required',
            'penulis' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,JPEG,JPG,PNG|max:2048'
        ]);

        $jurnal = JurnalOsis::create([
            'judul' => $request->judul,
            'slug' => Str::slug(($request->judul), '-'),
            'penulis' => $request->penulis,
            'pict' => '',
            'clickbait' => Str::limit($request->deskripsi, 35, '...'),
            'deskripsi' => $request->deskripsi,
            'created_jurnal' => Carbon::today('Asia/Jakarta'),
        ]);

        if($gambar = $request->file('gambar')) {
            $destPath = 'assets/berita/';
            $originalImg = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destPath, $originalImg);
            $jurnal->pict = "$originalImg";
        }

        $jurnal->save();
        // $feedback = [];

        return redirect('/admin-jurnalosis/')->with('messageslert', 'Data Berhasil Ditambahkan!')->with('class', 'success');
    }

    public function edit($id) {
        $jurnal = JurnalOsis::find($id);
        $title = "Admin Edit Jurnal Osis";
        return view('admin.jurnal.admin-update-jurnal', [
            'jurnal' => $jurnal,
            'title' => $title,
        ]);
    }

    public function update(Request $request, $id) {
        $jurnal = JurnalOsis::find($id);
        // dd($news->id);
        $rules = [
            'judul' => 'required|min:5|max:255',
            'penulis' => 'required',
            'deskripsi' => 'required',
        ];

        if ($request->judul != $jurnal->judul){
            $rules['judul'] = 'required|unique:jurnal_oses';
        }
        
        $validatedData = $request->validate($rules);
        
        if ($gambar = $request->file('gambar')) {
            $destPath = 'assets/berita/';
            $originalImg = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destPath, $originalImg);
            $validatedData['pict'] = "$originalImg";
            File::delete(public_path("assets/berita/" . $jurnal->pict));
        } else {
            unset($validatedData['pict']);
        }
        $validatedData['slug'] = Str::slug(($request->judul), '-');
        $validatedData['clickbait'] = Str::limit($request->deskripsi, 35, '...');

        JurnalOsis::where('id', $jurnal->id)
                ->update($validatedData);

        return redirect('/admin-jurnalosis/')->with('messageslert', 'Data Berhasil Diubah!')->with('class', 'warning');
    }

    public function destroy($id) {
        $jurnal = JurnalOsis::find($id);
        $jurnal->delete();
        
        return redirect('/admin-jurnalosis/')->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
    }
}
