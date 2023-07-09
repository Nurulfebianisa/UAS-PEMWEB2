<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Prodi extends Model
{
    use HasFactory;

    protected $table = "data_prodi";
    protected $primaryKey ="id_prodi";
    protected $fillable=[
        'id_prodi','nama_prodi','prestasi_prodi','biaya_kuliah','mutu_tenaga_pendidik','presentase_lulusan','akreditas_id_akreditas','fasilitas_id_fasilitas',
    ];

    public function akreditas(){
        return $this->belongsTo(akreditas::class);
    }
    public function fasilitas(){
        return $this->belongsTo(fasilitas::class);
    }
    
}


