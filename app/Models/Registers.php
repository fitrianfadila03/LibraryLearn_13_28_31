<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registers extends Model // Gunakan nama singular sesuai konvensi
{
    use HasFactory;

    protected $table = 'registers'; // Sesuaikan dengan nama tabel

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    public function Registers()
    {
        return $this->hasMany(Post::class, 'register_id'); // Foreign key pada tabel posts adalah register_id
    }
}
