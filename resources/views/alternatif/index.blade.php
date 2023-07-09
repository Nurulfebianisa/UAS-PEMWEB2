@extends('alternatif.layout')
@section('title', $title)
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Alternatif</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Alternatif</li>
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
                                <h3 class="card-title">Alternatif</h3>
                                <div class="card-tools">
                                    <a href="/createProdi" class="btn btn-primary btn-lg btn-block " role="button"
                                        aria-pressed="true">Tambah Alternatif</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prodi</th>
                                            <th>Prestasi Prodi</th>
                                            <th>Biaya Kuliah</th>
                                            <th>Mutu Tenaga Pendidik</th>
                                            <th>Presentase Lulusan</th>
                                            <th>Akreditasi</th>
                                            <th>Fasilitas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $dataProdi as $item)
                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_prodi }}</td>
                                                <td>{{ $item->prestasi_prodi }}</td>
                                                <td>{{ $item->biaya_kuliah }}</td>
                                                <td>{{ $item->mutu_tenaga_pendidik }}</td>
                                                <td>{{ $item->presentase_lulusan }}</td>
                                                <td>{{ $item->akreditas->akreditas }}</td>
                                                <td>{{ $item->fasilitas->fasilitas }}</td>
                                               
                                               
                                                <td>
                                                    <a href="{{ url('editProdi', $item->id_prodi) }}"><i
                                                            class="fa-solid fa-pen-to-square"></i></a> | <a
                                                        href="{{ url('deleteProdi', $item->id_prodi) }}"><i
                                                            class="fa-solid fa-trash" style="color: red"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
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
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
