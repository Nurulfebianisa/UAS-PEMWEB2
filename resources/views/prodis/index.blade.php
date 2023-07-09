@extends('prodis.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Program Studi</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('prodis.create') }}"> Create New prodi</a> --}}
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Program Studi</th>
            <th>Kode Program Studi</th>
            <th>Nama Kampus</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($prodis as $prodi)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $prodi->nama_prodi }}</td>
            <td>{{ $prodi->kode_prodi}}</td>
            <td>{{ $prodi->nama_kampus }}</td>
            <td>{{ $prodi->alamat }}</td>
          
            <td>
                {{-- <form action="{{ route('prodis.destroy',$prodi->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('prodis.show',$prodi->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('prodis.edit',$prodi->id) }}">Edit</a>
      --}}
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {{-- {!! $prodis->links() !!} --}}
        
@endsection