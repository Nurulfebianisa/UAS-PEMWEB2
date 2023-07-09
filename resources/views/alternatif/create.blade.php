@extends('alternatif.layout')
@section('title', $title)
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Prodi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Prodi</li>
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
                                <h3 class="card-title">Input Data Prodi</h3>
                            </div>
                            <div class="card-body">
                                <form action="/simpanAlternatif" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Nama Program Studi:</strong>
                                                <input type="text" name="nama_prodi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Prestasi Prodi:</strong>
                                                <input type="text" name="prestasi_prodi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Biaya Kuliah:</strong>
                                                <input type="text" name="biaya_kuliah" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Mutu Tenaga Pendidik:</strong>
                                                <input type="text" name="mutu_tenaga_pendidik" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Presentase Lulusan:</strong>
                                                <input type="text" name="presentase_lulusan" class="form-control">
                                            </div>
                                        </div>

                                        {{-- akreditasi --}}
                                        <div class="form-group">
                                            <label for="nama">Akreditasi</label>
                                            <select class="form-control-select" style="width: 100%;"
                                                name="akreditas_id_akreditas" id="fasilitas_id_fasilitas">
                                                <option disabled value>Pilih Akreditas</option>
                                                @foreach ($ak as $item)
                                                    <option value="{{ $item->id_akreditas }}">{{ $item->akreditas }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        {{-- Fasilitas --}}
                                        <div class="form-group">
                                            <label for="nama">Fasilitas</label>
                                            <select class="form-control-select" style="width: 100%;" name="lokasi_id_lokasi"
                                                id="fasilitas_id_fasilitas">
                                                <option disabled value>Pilih Fasilitas</option>
                                                @foreach ($fas as $item)
                                                    <option value="{{ $item->id_fasilitas }}">{{ $item->fasilitas }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
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
