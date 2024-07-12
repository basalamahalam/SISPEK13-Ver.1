<?php

namespace App\Http\Controllers;

use App\Models\JurnalOsis;
use Illuminate\Http\Request;

class JurnalOsisController extends Controller {
    public function index() {
        $data = JurnalOsis::latest()->filter(request(['search']))->paginate(6);
        return view('jurnal', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function detail($id) {
        $detailJurnal = JurnalOsis::find($id);
        $data = JurnalOsis::all();
        return view('/jurnal_detail', [
            'jurnal' => $detailJurnal,
            'data' => $data,
        ]);
    }
}
