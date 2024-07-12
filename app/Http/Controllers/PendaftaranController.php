<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PendaftaranController extends Controller {
    public function index() {
        return view('signup');
    }

    public function store(Request $request) {
        $request->validate([
            'pilih' => 'required',
            'email' => 'required|email:dns',
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'gender' => 'required',
            'nowa' => 'required|max:255',
            'pict' => 'required|image|mimes:jpeg,jpg,png,JPEG,JPG,PNG|max:2048',
            'about' => 'required',
            'reason' => 'required',
        ]);

        $pendaftaran = Pendaftaran::create([
            'pendaftaran' => $request->pilih,
            'email' => $request->email,
            'nama' =>  $request->nama,
            'kelas' => $request->kelas,
            'gender' => $request->gender,
            'contact' => $request->nowa,
            'pict_personal' => "",
            'about' => $request->about,
            'reason' => $request->reason,
            'created_sign' => Carbon::today('Asia/Jakarta'),
        ]);
        
        if($pict = $request->file('pict')) {
            $destPath = 'assets/berita/';
            $originalImg = date('YmdHis') . "." . $pict->getClientOriginalExtension();
            $pict->move($destPath, $originalImg);
            $pendaftaran->pict_personal = "$originalImg";
        }

        $pendaftaran->save();

        return redirect('/signup');
    }
}
