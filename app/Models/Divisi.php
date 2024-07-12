<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    public static function findSlug($id){
        $anggota = self::where('divisis.id_divisi', $id)
        ->get();
        return $anggota[0]->slug;
    }
}
