@extends('prodis.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD (Create, Read, Update and Delete) with Image Upload</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            {{-- <a class="btn btn-success" href="{{ url('create') }}"> Create New camaba</a> --}}
</div>

            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
  <div class="container mt-5">
     <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow rounded">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>

            <th>No</th>
            <th>Nama Prodi</th>
            <th>Kode Prodi</th>
            <th>Nama Kampus</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($prodis as $prodis)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $prodis->nama_prodi }}</td>
            <td>{{ $prodis->kode_prodi }}</td>
            <td>{{ $prodis->nama_kampus }}</td>
            <td>{{ $prodis->alamat }}</td>
        
            <td>
                {{-- <form action="{{ route('destroy',$prodis->id) }}" method="POST"> --}}
      
                    {{-- <a class="btn btn-info" href="{{ route('show',$prodis->id) }}">Show</a>
                    </tr>
                    <a class="btn btn-primary" href="{{ route('edit',$prodis->id) }}">Edit</a> --}}

      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
            </table>
          </div>
        </div>
      </div>
     </div>
  </div>
     
    {{-- {!! $kriterias->links() !!} --}}
 
    @endsection