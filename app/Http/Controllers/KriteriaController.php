<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::latest()->paginate(5);
    
        return view('kriterias.index',compact('kriterias'),[
            "title" => "Daftar Kriteria"
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriterias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kriteria' => 'required',
            'bobot' => 'required',
            'label'=> 'required',
        ]);
  
        $input = $request->all();

        return redirect()->route('kriterias.index')
        ->with('success','Kriteria created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        return view('kriterias.show',compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria)
    {
        return view('kriterias.edit',compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kriteria $kriteria)
    {
        $request->validate([
            'kriteria' => 'required',
            'bobot' => 'required',
            'label'=> 'required',
        ]);
  
        $input = $request->all();

        $kriteria->update($input);
    
        return redirect()->route('kriterias.index')
                        ->with('success','Kriteria updated successfully');
    }
  

   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriteria $kriteria)
    {
        $kriteria->delete();
     
        return redirect()->route('kriterias.index')
                        ->with('success','Kriteria deleted successfully');
    }
}
