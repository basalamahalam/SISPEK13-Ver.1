<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model {
    use HasFactory;

    protected $fillable = ['pendaftaran', 'email', 'nama', 'kelas', 'gender', 'contact', 'pict_personal', 'about', 'reason', 'created_sign'];
}
