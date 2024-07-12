<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalOsis extends Model {
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'penulis', 'pict', 'clickbait', 'deskripsi', 'created_jurnal'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%')
                    ->orWhere('clickbait', 'like', '%' . $search . '%');
        });
    }
}
