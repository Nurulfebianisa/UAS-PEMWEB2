<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akreditas extends Model
{
    use HasFactory;
    protected $table = "akreditasi";
    protected $primaryKey ="id_akreditas";
    protected $fillable=[
        'id_akreditas','akreditas',
    ];

    public function akreditas(){
        return $this->hasMany(Data_Prodi::class);
    }
}
