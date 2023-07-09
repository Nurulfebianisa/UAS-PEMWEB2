@extends('hasil.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Perangkingan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Perangkingan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <div class="card-tools">
                                    

                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Program Studi</th>
                                        <th>Hasil</th>

                                        
                                    
                                    @foreach ($hasil as $h)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $h->nama_prodi }}</td>
                                            <td>{{ $h->hasil }}</td>


                                            <td>
                                                {{-- <form action="{{ route('hasil.destroy',$h->id) }}" method="POST"> --}}

                                                {{-- <a class="btn btn-info" href="{{ route('hasil.show',$h->id) }}">Show</a> --}}

                                                {{-- <a class="btn btn-primary" href="{{ route('hasil.edit',$hasil->id) }}">Edit</a> --}}

                                                @csrf
                                              

                                                
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
    </div>
    </div>
@endsection
