<?php

namespace App\Http\Controllers;

use App\Models\Prodi; // Import model Prodi
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Menampilkan daftar fakultas/program studi dari database.
     */
    public function facu()
    {
        // Ambil semua data program studi dari database
        // Anda bisa menambahkan ->orderBy('nama_prodi') atau pagination jika datanya banyak
        $prodis = Prodi::all(); 
        
        // Kirim data prodis ke view
        return view('kampus.faculty', compact('prodis'));
    }
}