<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage facade
use Illuminate\Support\Facades\File; // Import File facade for deleting old image

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::latest()->paginate(5); // Pastikan pakai 'Prodi' dengan P besar
    
        return view('prodis.index', compact('prodis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'kode_prodi' => 'required',
            'nama_kampus' => 'required',
            'alamat' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan validasi gambar
        ]);
 
        $input = $request->all();

        // Handle File Upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Buat nama unik
            // Simpan gambar ke folder 'prodi_images' dalam disk 'public'
            $image->storeAs('public/prodi_images', $imageName);
            $input['gambar'] = $imageName; // Simpan hanya nama file di database
        }

        Prodi::create($input); // Gunakan Model Prodi untuk membuat record baru

        return redirect()->route('prodis.index')
            ->with('success', 'Program Studi berhasil ditambahkan.'); // Pesan sukses diperbarui
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        return view('prodis.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        return view('prodis.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'kode_prodi' => 'required',
            'nama_kampus' => 'required',
            'alamat' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan validasi gambar
        ]);
 
        $input = $request->all();

        // Handle File Upload for Update
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($prodi->gambar && Storage::disk('public')->exists('prodi_images/' . $prodi->gambar)) {
                Storage::disk('public')->delete('prodi_images/' . $prodi->gambar);
            }

            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Buat nama unik
            $image->storeAs('public/prodi_images', $imageName);
            $input['gambar'] = $imageName; // Simpan nama file baru di database
        } else {
            // Jika tidak ada gambar baru diupload, pastikan kolom 'gambar' tidak dihapus
            // Ini penting agar gambar lama tetap ada jika user hanya mengedit data lain
            unset($input['gambar']); // Pastikan 'gambar' tidak diupdate jika tidak ada file baru
        }

        $prodi->update($input);
    
        return redirect()->route('prodis.index')
            ->with('success', 'Program Studi berhasil diperbarui.'); // Pesan sukses diperbarui
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        // Hapus gambar terkait dari penyimpanan sebelum menghapus data prodi
        if ($prodi->gambar && Storage::disk('public')->exists('prodi_images/' . $prodi->gambar)) {
            Storage::disk('public')->delete('prodi_images/' . $prodi->gambar);
        }

        $prodi->delete();
     
        return redirect()->route('prodis.index')
            ->with('success', 'Program Studi berhasil dihapus.'); // Pesan sukses diperbarui
    }
}