<?php
use Illuminate\Support\Facades\Route;

// Berita
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminJurnalOsisController;
use App\Http\Controllers\AdminMenfessController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JurnalOsisController;
// Menfess
use App\Http\Controllers\MenfessController;
use App\Http\Controllers\MenfessFormController;

// Login
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;

// Osis/Mpk
use App\Http\Controllers\AdminOsisController;
use App\Http\Controllers\AdminMpkController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AnggotaMpkController;
use App\Http\Controllers\AngkatanOsisController;
use App\Http\Controllers\AngkatanMpkController;
use App\Http\Controllers\DivisiOsisController;
use App\Http\Controllers\DivisiMpkController;
use App\Http\Controllers\OsisMpkController;
use App\Http\Controllers\ProfilDivisiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/osis', [OsisMpkController::class, 'displayOsis']);
Route::get('/mpk', [OsisMpkController::class, 'displayMpk']);

// Berita as guest
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita_detail/{id}/detail', [BeritaController::class, 'detail']);

// Jurnal as guest
Route::get('/jurnal', [JurnalOsisController::class, 'index']);
Route::get('/jurnal_detail/{id}/detail', [JurnalOsisController::class, 'detail']);


Route::get('/ekskul', function(){
    return view('ekskul');
});

// Menfess as Guest
Route::get('/menfess', [MenfessController::class, 'index']);
Route::get('/form_menfess', [MenfessFormController::class, 'index']);

// Menfess System as Guest
Route::post('/form_menfess/store', [MenfessFormController::class, 'store']);


Route::get('/profile', function(){
    return view('profile');
});

Route::get('/profil-divisi/{organisasi}/{divisi}', [ProfilDivisiController::class, 'show']);

// Pendaftaran OSIS/MPK
Route::get('/signup', [PendaftaranController::class, 'index']);
Route::post('/signup/store', [PendaftaranController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function() {

    // Berita
    Route::get('/admin-berita', [AdminBeritaController::class, 'index']);
    Route::get('/admin-tambahberita', [AdminBeritaController::class, 'add']);
    
    // System Admin Berita
    Route::post('/admin-tambahberita/store', [AdminBeritaController::class, 'store']);
    Route::get('/admin-update-berita/{id}/edit', [AdminBeritaController::class, 'edit']);
    Route::put('/admin-update-berita/{id}', [AdminBeritaController::class, 'update']);
    Route::delete('/admin-berita/{id}/{slug}', [AdminBeritaController::class, 'destroy']);

    // Jurnal Osis
    Route::get('/admin-jurnalosis', [AdminJurnalOsisController::class, 'index']);
    Route::get('/admin-tambahjurnal', [AdminJurnalOsisController::class, 'add']);

    // System Admin Jurnal Osis
    Route::post('/admin-tambahjurnal/store', [AdminJurnalOsisController::class, 'store']);
    Route::get('/admin-update-jurnal/{id}/edit', [AdminJurnalOsisController::class, 'edit']);
    Route::put('/admin-update-jurnal/{id}', [AdminJurnalOsisController::class, 'update']);
    Route::delete('/admin-jurnalosis/{id}/{slug}', [AdminJurnalOsisController::class, 'destroy']);

    
    // Admin Menfess
    Route::get('/admin-menfess', [AdminMenfessController::class, 'index']);
    Route::get('/admin-menfess-pending', [AdminMenfessController::class, 'index']);
    Route::get('/admin-menfess-accept', [AdminMenfessController::class, 'acceptIndex']);
    Route::get('/admin-menfess-terbaik', [AdminMenfessController::class, 'terbaikIndex']);

    // System Admin Menfess
    Route::put('/admin-menfess/accept/{id}', [AdminMenfessController::class, 'accept']);
    Route::put('/admin-menfess/terbaik/{id}', [AdminMenfessController::class, 'terbaik']);
    Route::delete('/admin-menfess/delete/{id}', [AdminMenfessController::class, 'destroy']);
    Route::delete('/admin-menfess-terbaik/delete/{id}', [AdminMenfessController::class, 'destroyTerbaik']);
    Route::delete('/admin-menfess-accept/delete/{id}', [AdminMenfessController::class, 'destroyAccept']);
    Route::delete('/admin-menfess/clearMenfess', [AdminMenfessController::class, 'destroyAll']);
    
    // System Pendaftaran OSIS-MPK
    // OSIS
    Route::get('/admin-pendaftaran-osis', [AdminOsisController::class, 'index']);
    Route::get('/admin-pendaftaran-osis-detail/{id}/detail-/{pendaftaran}/{nama}', [AdminOsisController::class, 'detail']);
    Route::get('/admin-pendaftaran-osis-detail/{id}/detail-/{pendaftaran}/{nama}/pdf', [AdminOsisController::class, 'pdf']);
    Route::delete('/admin-pendaftaran-osis/{id}', [AdminOsisController::class, 'destroy']);
    
    // MPK
    Route::get('/admin-pendaftaran-mpk', [AdminMpkController::class, 'index']);
    Route::get('/admin-pendaftaran-mpk-detail/{id}/detail-/{pendaftaran}/{nama}', [AdminMpkController::class, 'detail']);
    Route::get('/admin-pendaftaran-mpk-detail/{id}/detail-/{pendaftaran}/{nama}/pdf', [AdminMpkController::class, 'pdf']);
    Route::delete('/admin-pendaftaran-mpk/{id}', [AdminMpkController::class, 'destroy']);

    // kumpulan Anggota Osis
    Route::get('/admin-osis', [AnggotaController::class, 'index']);
    Route::get('/admin-profil-divisi-osis/{slug}', [AnggotaController::class, 'osisDivisi']);
    Route::delete('/admin-profil-divisi-osis/{anggota}', [AnggotaController::class, 'destroy']);
    Route::get('/admin-tambah-anggota-divisi-osis/{slug}', [AnggotaController::class, 'create']);
    Route::post('/admin-tambah-anggota-divisi-osis', [AnggotaController::class, 'store']);
    Route::get('/admin-update-anggota-divisi-osis/{anggota}', [AnggotaController::class, 'edit']);
    Route::put('/admin-update-anggota-divisi-osis/{anggota}', [AnggotaController::class, 'update']);

    // angkatan osis
    Route::get('/admin-update-osis/{angkatan}', [AngkatanOsisController::class, 'edit']);
    Route::put('/admin-update-osis/{angkatan}', [AngkatanOsisController::class, 'update']);

    //Divisi Osis
    Route::get('/admin-update-divisi-osis/{divisi:slug}', [DivisiOsisController::class, 'edit']);
    Route::put('/admin-update-divisi-osis/{divisi:slug}', [DivisiOsisController::class, 'update']);

    //kumpulan anggota mpk
    Route::get('/admin-mpk', [AnggotaMpkController::class, 'index']);
    Route::get('/admin-profil-divisi-mpk/{slug}', [AnggotaMpkController::class, 'mpkDivisi']);
    Route::delete('/admin-profil-divisi-mpk/{anggota}', [AnggotaMpkController::class, 'destroy']);
    Route::get('/admin-tambah-anggota-divisi-mpk/{slug}', [AnggotaMpkController::class, 'create']);
    Route::post('/admin-tambah-anggota-divisi-mpk', [AnggotaMpkController::class, 'store']);
    Route::get('/admin-update-anggota-divisi-mpk/{anggota}', [AnggotaMpkController::class, 'edit']);
    Route::put('/admin-update-anggota-divisi-mpk/{anggota}', [AnggotaMpkController::class, 'update']);
    // angkatan mpk
    Route::get('/admin-update-mpk/{angkatan}', [AngkatanMpkController::class, 'edit']);
    Route::put('/admin-update-mpk/{angkatan}', [AngkatanMpkController::class, 'update']);
    // divisi mpk
    Route::get('/admin-update-divisi-mpk/{divisi:slug}', [DivisiMpkController::class, 'edit']);
    Route::put('/admin-update-divisi-mpk/{divisi:slug}', [DivisiMpkController::class, 'update']);
    
});


