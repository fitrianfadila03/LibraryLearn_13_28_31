<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus'; // Nama tabel yang digunakan

    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'uraian',
        'image'
    ];
}