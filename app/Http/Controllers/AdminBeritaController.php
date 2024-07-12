<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;

class AdminBeritaController extends Controller {
    public function index() {
        $dataNews = Berita::latest()->paginate(5);
        $title = "Admin Berita";
        return view('admin.berita.admin-berita', compact(['dataNews', 'title']))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function add() {
        $title = "Admin Tambah Berita";
        return view('admin.berita.admin-tambahberita', compact('title'));
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|min:5|max:255|unique:beritas',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,JPEG,JPG,PNG|max:2048'
        ]);

        $berita = Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug(($request->judul), '-'),
            'clickbait' => Str::limit($request->deskripsi, 35, '...'),
            'deskripsi' => $request->deskripsi,
            'created_news' => Carbon::today('Asia/Jakarta'),
            'pict' => '',
        ]);

        if($gambar = $request->file('gambar')) {
            $destPath = 'assets/berita/';
            $originalImg = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destPath, $originalImg);
            $berita->pict = "$originalImg";
        }

        $berita->save();

        return redirect('/admin-berita/')->with('messageslert', 'Data Berhasil Ditambahkan!')->with('class', 'success');
    }

    public function edit($id) {
        $news = Berita::find($id);
        $title = "Admin Edit Berita";
        return view('admin.berita.admin-update-berita', [
            'news' => $news,
            'title' => $title,
        ]);
    }

    public function update(Request $request, $id) {
        $news = Berita::find($id);
        $rules = [
            'judul' => 'required|min:5|max:255',
            'deskripsi' => 'required',
        ];

        if ($request->judul != $news->judul){
            $rules['judul'] = 'required|unique:beritas';
        }
        
        $validatedData = $request->validate($rules);
        
        if ($gambar = $request->file('gambar')) {
            $destPath = 'assets/berita/';
            $originalImg = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destPath, $originalImg);
            $validatedData['pict'] = "$originalImg";
            File::delete(public_path("assets/berita/" . $news->pict));
        } else {
            unset($validatedData['pict']);
        }
        $validatedData['slug'] = Str::slug(($request->judul), '-');
        $validatedData['clickbait'] = Str::limit($request->deskripsi, 35, '...');

        Berita::where('id', $news->id)
                ->update($validatedData);

        return redirect('/admin-berita/')->with('messageslert', 'Data Berhasil Diubah!')->with('class', 'warning');
    }

    public function destroy($id) {
        $news = Berita::find($id);
        $news->delete();
        
        return redirect('/admin-berita/')->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
    }
}
