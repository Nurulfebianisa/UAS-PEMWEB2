<?php
namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Data_Prodi;
use App\Models\Hasil;
use App\Models\Pengkali;
use App\Models\Normalisasi;

use App\Models\Prodi;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{

  
    public function alternatif(){
    
        return view('alternatif.index',
        [
            'alternatif' => Alternatif::get()
        ]);
    }

    public function data_prodi(){
    
        return view('data_prodi.index',
        [
            'data_prodi' => Data_Prodi::get()
        ]);
    }

    public function prodis(){
    
        return view('prodis.index',
        [
            'prodis' => Prodi::get()
        ]);
    }


    public function normalisasi()
    {
        return view('normalisasi.index',
        [
            'normalisasi' => Normalisasi::get()
        ]);
    }

    public function hasil()
    {
        return view('hasil.index',
        [
            'hasil' => Hasil::get()
        ]);
    }

     public function pengkali ()
     {
         return view('pengkali.index',
         [
          "title" => "Hasil Kali",
          'pengkali' => Pengkali::get()
         ]);
      }
}