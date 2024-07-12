<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menfess;

class AdminMenfessController extends Controller {
    public function index() {
        $dataPending = Menfess::all();
        $title = "Admin Menfess Pending";
        return view('admin.menfess.admin-menfess-pending', compact(['dataPending', 'title']));
    }

    public function acceptIndex() {
        $dataPending = Menfess::all()->sortBy('status');
        $dataPending->values()->all();
        $title = "Admin Menfess Accept";
        // $dataPending = $dataPending->orderBy('status', 'asc')->get();
        return view('admin.menfess.admin-menfess-accept', compact(['dataPending', 'title']));
    }

    public function terbaikIndex() {
        $dataPending = Menfess::all();
        $title = "Admin Menfess Terbaik";
        return view('admin.menfess.admin-menfess-terbaik', compact(['dataPending', 'title']));
    }

    public function accept($id, Request $request) {
        $dataPending = Menfess::find($id);
        $dataPending['status'] = 2;
        $dataPending->update($request->except('submit_at'));
        return redirect('/admin-menfess/')->with('messageslert', 'Data Berhasil Diaccept!')->with('class', 'success');
    }

    public function terbaik($id, Request $request) {
        $dataPending = Menfess::find($id);
        $dataPending['status'] = 1;
        $dataPending->update($request->except('submit_at'));
        return redirect('/admin-menfess/')->with('messageslert', 'Data Berhasil Digolongkan Terbaik!')->with('class', 'warning');
    }

    public function destroy($id) {
        $dataPending = Menfess::find($id);
        $dataPending->delete();
        return redirect('/admin-menfess/')->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
    }

    public function destroyTerbaik($id) {
        $dataTerbaik = Menfess::find($id);
        $dataTerbaik->delete();
        return redirect('/admin-menfess-terbaik/')->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
    }

    public function destroyAccept($id) {
        $dataAccept = Menfess::find($id);
        $dataAccept->delete();
        return redirect('/admin-menfess-accept/')->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
    }

    public function destroyAll() {
        Menfess::truncate();
        return redirect('/admin-menfess/')->with('messageslert', 'Data Berhasil Dihapus Semua!')->with('class', 'danger');
    }
}
