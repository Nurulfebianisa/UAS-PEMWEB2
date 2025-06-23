<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $table = 'prodis';

    protected $fillable = [
        'nama_prodi',
        'kode_prodi',
        'nama_kampus',
        'alamat',
        'gambar', // <-- Pastikan ini ada
    ];
}

 