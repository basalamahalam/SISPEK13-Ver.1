<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller {
    public function index() {
        
        $data = Berita::latest()->filter(request(['search']))->paginate(6);
        $title = "SISPEK13 | Berita";
 
        return view('users.berita.berita', compact(['data', 'title']))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function detail($id) {
        $detailNews = Berita::find($id);
        $data = Berita::all();
        $title = "SISPEK13 | Berita Detail " . $detailNews->judul;

        return view('users.berita.berita_detail', [
            'news' => $detailNews,
            'data' => $data,
            'title' => $title,
        ]);
    }
}
