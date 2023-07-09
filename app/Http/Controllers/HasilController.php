<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $h = hasil::latest()->paginate(5);
    
        return view('hasil.index',compact('hasil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hasil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'hasil' => 'required',
          
        ]);
  
        $input = $request->all();

        return redirect()->route('hasil.index')
        ->with('success','hasil created successfully.');
}
    public function show(Hasil $h)
    {
        return view('hasil.show',compact('hasil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hasil $h)
    {
        return view('hasil.edit',compact('hasil'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hasil $h)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'hasil' => 'required',
        ]);
  
        $input = $request->all();

        $h->update($input);
    
        return redirect()->route('hasil.index')
                        ->with('success','hasil updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hasil $h)
    {
        $h->delete();
     
        return redirect()->route('hasil.index')
                        ->with('success','hasil deleted successfully');
    }
}
