<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menfess;

class MenfessController extends Controller {
    public function index() {
        $data = Menfess::all();
        $title = "Menfess";
        return view('users.menfess.menfess', compact(['data', 'title']));
    }
}
