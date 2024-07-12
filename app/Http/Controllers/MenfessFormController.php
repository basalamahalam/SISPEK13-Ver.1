<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menfess;

class MenfessFormController extends Controller {
    public function index() {
        return view('users.menfess.form_menfess', [
            'title' => 'Form Menfess',
        ]);
    }

    public function store(Request $request) {
        Menfess::create($request->all());
        return redirect('form_menfess')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
