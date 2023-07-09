<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = prodi::latest()->paginate(5);
    
        return view('prodis.index',compact('prodis'))
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
            'nama_kampus'=> 'required',
            'alamat'    => 'required',
        ]);
  
        $input = $request->all();

        return redirect()->route('prodis.index')
        ->with('success','prodi created successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        return view('prodis.show',compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        return view('prodis.edit',compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'kode_prodi' => 'required',
            'nama_kampus'=> 'required',
            'alamat'=> 'required',
        ]);
  
        $input = $request->all();

        $prodi->update($input);
    
        return redirect()->route('prodis.index')
                        ->with('success','prodi updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
     
        return redirect()->route('prodis.index')
                        ->with('success','prodi deleted successfully');
    }
}