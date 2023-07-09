@extends('camabas.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Halaman Admin Calon Mahasiswa Baru</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('camabas.create') }}"> Create New Camaba</a>
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
            <th>Image</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Asal Sekolah</th>
            <th>Nomer Telepon</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($camabas as $camaba)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $camaba->image }}" width="100px"></td>
            <td>{{ $camaba->nisn }}</td>
            <td>{{ $camaba->nama }}</td>
            <td>{{ $camaba->email }}</td>
            <td>{{ $camaba->jk }}</td>
            <td>{{ $camaba->tempat_lahir }}</td>
            <td>{{ $camaba->tanggal_lahir }}</td>
            <td>{{ $camaba->asal_sekolah }}</td>
            <td>{{ $camaba->no_hp }}</td>
            <td>{{ $camaba->alamat }}</td>
            <td>
                <form action="{{ route('camabas.destroy',$camaba->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('camabas.show',$camaba->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('camabas.edit',$camaba->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $camabas->links() !!}
        
@endsection