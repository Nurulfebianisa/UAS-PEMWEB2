<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class alternatifController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatifs = alternatif::latest()->paginate(5);
    
        return view('alternatifs.index',compact('alternatifs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alternatifs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alternatif' => 'required',
            'bobot' => 'required',
            'label'=> 'required',
        ]);
  
        $input = $request->all();

        return redirect()->route('alternatifs.index')
        ->with('success','alternatif created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(alternatif $alternatif)
    {
        return view('alternatifs.show',compact('alternatif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alternatif $alternatif)
    {
        return view('alternatifs.edit',compact('alternatif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alternatif $alternatif)
    {
        $request->validate([
            'alternatif' => 'required',
            'bobot' => 'required',
            'label'=> 'required',
        ]);
  
        $input = $request->all();

        $alternatif->update($input);
    
        return redirect()->route('alternatifs.index')
                        ->with('success','alternatif updated successfully');
    }
  

   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(alternatif $alternatif)
    {
        $alternatif->delete();
     
        return redirect()->route('alternatifs.index')
                        ->with('success','alternatif deleted successfully');
    }
}
