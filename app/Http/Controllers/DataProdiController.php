<?php

namespace App\Http\Controllers;

use App\Models\akreditas;
use App\Models\Data_Prodi;
use App\Models\fasilitas;
use Illuminate\Http\Request;

class DataProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        $dataProdi = Data_Prodi::with('akreditas','fasilitas')->paginate(10);
        return view('alternatif.index',compact('dataProdi'),[
            "title" => "Daftar Prodi"
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $ak = akreditas::all();
        $fas = fasilitas::all();
        return view('alternatif.create', compact('ak','fas'),[
            "title" => "Input Prodi"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'prestasi_prodi' => 'required',
            'biaya_kuliah'=> 'required',
            'mutu_tenaga_pendidik' => 'required',
            'presentase_lulusan' => 'required',
            'akreditas_id_akreditas' => 'required',
            'fasilitas_id_fasilitas'=> 'required',
        ]);
  
        $input = $request->all();

        return redirect()->route('data_prodi.index')
        ->with('success','prodi created successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(Data_Prodi $pr)
    {
        return view('data_prodi.show',compact('data_prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data_Prodi $pr)
    {
        return view('data_prodi.edit',compact('data_prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data_Prodi $pr)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'prestasi_prodi' => 'required',
            'biaya_kuliah'=> 'required',
            'mutu_tenaga_pendidik' => 'required',
            'presentase_lulusan' => 'required',
            'akreditas_id_akreditas' => 'required',
            'fasilitas_id_fasilitas'=> 'required',
        ]);
  
        $input = $request->all();

        $pr->update($input);
    
        return redirect()->route('data_prodi.index')
                        ->with('success','prodi updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data_Prodi $pr)
    {
        $pr->delete();
     
        return redirect()->route('data_prodi.index')
                        ->with('success','prodi deleted successfully');
    }
}