<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminMpkController extends Controller {
    public function index() {
        $signMpk = Pendaftaran::all()->where('pendaftaran', 'MPK');
        $title = "Admin Pendaftaran Mpk";
        return view('admin.pendaftaran.admin-pendaftaran-mpk', compact(['signMpk', 'title']));
    }

    public function detail($id) {
        $detail = Pendaftaran::find($id);
        $title = "Admin Pendaftaran Mpk Detail " . $detail->nama;
        return view('admin.pendaftaran.admin-pendaftaran-mpk-detail', [
            'detail' => $detail,
            'title' => $title,
        ]);
    }

    public function destroy($id) {
        $mpk = Pendaftaran::find($id);
        $mpk->delete();
        
        return redirect('/admin-pendaftaran-mpk/')->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
    }

    public function pdf($id) {
        $osispdf = Pendaftaran::find($id);
        $pdf = Pdf::loadView('pdf_detail.pendaftar', [
            'pdf' => $osispdf,
        ]);
        $client = $osispdf->nama . "-" . $osispdf->kelas . "-" . $osispdf->pendaftaran . ".pdf";
        return $pdf->download($client);
    }
}
