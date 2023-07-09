@extends('normalisasi.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Normalisasi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Normalisasi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                        <div class="card-tools">
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
            <th>Presentase Lulusan</th>
            <th>Akreditasi Prodi</th>
            <th>Fasilitas</th>
            
        </tr>
    </div>
        @foreach ($normalisasi as $norm)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $norm->nama_prodi }}</td>
            <td>{{ $norm->prestasi_prodi }}</td>
            <td>{{ $norm->biaya }}</td>
            <td>{{ $norm->mutu_tenaga_pendidik }}</td>
            <td>{{ $norm->presentase_lulusan }}</td>
            <td>{{ $norm->akreditasi }}</td>
            <td>{{ $norm->fasilitas }}</td>

          
          
            <td>
                {{-- <form action="{{ route('normalisasi.destroy',$norm->id) }}" method="POST"> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {{-- {!! $norm->links() !!} --}}
        
@endsection

