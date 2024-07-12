<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_anggota';
    // protected $fillable = ['id_angkatan','gambar_anggota', 'id_divisi', 'id_jabatan', 'id_organisasi', 'nama_anggota', 'kelas_anggota', 'instagram_anggota'];
    protected $guarded = ['id_anggota'];
    public static function getJoin(){
        $anggota =
        Anggota::join('divisis', 'anggotas.id_divisi', '=', 'divisis.id_divisi')
            ->join('jabatans', 'anggotas.id_jabatan', '=', 'jabatans.id_jabatan')
            ->join('organisasis', 'anggotas.id_organisasi', '=', 'organisasis.id_organisasi')
            ->join('angkatans', 'anggotas.id_angkatan', '=', 'angkatans.id_angkatan')
            ->join('kelas', 'anggotas.id_kelas', '=', 'kelas.id_kelas');
        return $anggota;
    }
}
