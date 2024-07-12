<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminOsisController extends Controller {
    public function index() {
        $signOsis = Pendaftaran::all()->where('pendaftaran', 'OSIS');
        $title = "Admin Pendaftaran Osis";
        return view('admin.pendaftaran.admin-pendaftaran-osis', compact(['signOsis', 'title']));
    }

    public function detail($id) {
        $detail = Pendaftaran::find($id);
        $title = "Admin Pendaftaran Osis Detail " . $detail->nama;
        return view('admin.pendaftaran.admin-pendaftaran-osis-detail', [
            'detail' => $detail,
            'title' => $title,
        ]);
    }

    public function destroy($id) {
        $osis = Pendaftaran::find($id);
        $osis->delete();
        
        return redirect('/admin-pendaftaran-osis/')->with('messageslert', 'Data Berhasil Dihapus!')->with('class', 'danger');
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
