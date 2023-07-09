<?php
  
namespace App\Http\Controllers;
  
use App\Models\Camaba;
use Illuminate\Http\Request;
  
class CamabaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camabas = Camaba::latest()->paginate(5);
    
        return view('camabas.index',compact('camabas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('camabas.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'email'=> 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Camaba::create($input);
     
        return redirect()->route('camabas.index')
                        ->with('success','Camaba created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Camaba  $camaba
     * @return \Illuminate\Http\Response
     */
    public function show(Camaba $camaba)
    {
        return view('camabas.show',compact('camaba'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\camaba  $camaba
     * @return \Illuminate\Http\Response
     */
    public function edit(Camaba $camaba)
    {
        return view('camabas.edit',compact('camaba'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Camaba  $camaba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camaba $camaba)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'email'=> 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $camaba->update($input);
    
        return redirect()->route('camabas.index')
                        ->with('success','Camaba updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Camaba  $camaba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camaba $camaba)
    {
        $camaba->delete();
     
        return redirect()->route('camabas.index')
                        ->with('success','Camaba deleted successfully');
    }
}