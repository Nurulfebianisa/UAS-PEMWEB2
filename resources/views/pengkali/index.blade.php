@extends('pengkali.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data alternatif</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pengkali.create') }}"> Create New alternatif</a>
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
            <th>Prestasi Prodi</th>
            <th>Biaya Kuliah</th>
            <th>Mutu Tenaga Pendidik</th>
            <th>Akreditasi Prodi</th>
            <th>Fasilitas</th>
            <th>Presentase Lulusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pengkali as $p)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $p->nama_prodi }}</td>
            <td>{{ $p->prestasi_prodi }}</td>
            <td>{{ $p->biaya }}</td>
            <td>{{ $p->mutu_tenaga_pendidik }}</td>
            <td>{{ $p->presentase_lulusan }}</td>
            <td>{{ $p->akreditasi }}</td>
            <td>{{ $p->fasilitas }}</td>
       
          
          
            <td>
                <form action="{{ route('pengakali.destroy',$p->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('pengkali.show',$p->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('pengkali.edit',$p->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {{--{!! $penilaian->links() !!} --
        
@endsection

