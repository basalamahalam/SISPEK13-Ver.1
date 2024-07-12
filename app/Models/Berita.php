<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model {
    use HasFactory;

    protected $fillable = ['judul', 'slug', 'pict', 'clickbait', 'deskripsi', 'created_news'];

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%')
                    ->orWhere('clickbait', 'like', '%' . $search . '%');
        });
    }

    // public function limit() {
    //     return Str::limit($this->description, Berita::35);
    // }
}
