<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Camaba extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'nisn', 'nama', 'email', 'jk', 'tempat_lahir','tanggal_lahir', 'asal_sekolah', 'no_hp', 'alamat', 'image'
    ];
}