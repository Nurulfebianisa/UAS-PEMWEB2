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
                            <form action="/simpanProdi" method="post"enctype="multipart/form-data">
                                @csrf
                                {{-- nama kos --}}
                                <div class="form-group">
                                    <label for="nama">Nama Prodi</label>
                                    <input type="text" name="nama_prodi" id="nama_prodi"
                                        class="form-control @error('nama_prodi') is-invalid @enderror"
                                        placeholder="nama_prodi" value="{{ old('nama_prodi') }}">
                                    @error('nama_prodi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- alamat --}}
                                <div class="form-group">
                                    <label for="nama">Prestasi Prodi</label>
                                    <input type="text" name="prestasi_prodi" id="prestasi_prodi"
                                        class="form-control" placeholder="prestasi_prodi"
                                        value="{{ old('prestasi_prodi') }}">
                                    @error('prestasi_prodi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Biaya Kuliah</label>
                                    <input type="number" name="biaya_kuliah" id="biaya_kuliah" step=0.01
                                        class="form-control" placeholder="biaya_kuliah" value="{{ old('biaya_kuliah') }}">
                                    @error('biaya_kuliah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                {{-- harga sewa --}}
                                <div class="form-group">
                                    <label for="nama">Mutu Tenaga Pendidik</label>
                                    <input type="number" name="mutu_tenaga_pendidik" id="mutu_tenaga_pendidik" step=0.01
                                        class="form-control" placeholder="mutu_tenaga_pendidik" value="{{ old('mutu_tenaga_pendidik') }}">
                                    @error('mutu_tenaga_pendidik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nama">Presentase Lulusan</label>
                                    <input type="number" name="presentase_lulusan" id="presentase_lulusan" step=0.01
                                        class="form-control" placeholder="presentase_lulusan" value="{{ old('presentase_lulusan') }}">
                                    @error('presentase_lulusan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

        
                             
                                {{-- jenis kos --}}
                                <div class="form-group">
                                    <label for="nama">Akreditasi</label>
                                    <select class="form-control-select" style="width: 100%;" name="akreditas_id_akreditas"
                                        id="akreditas_id_akreditas">
                                        <option disabled value>Pilih Akreditasi</option>
                                        @foreach ($ak as $item)
                                            <option value="{{ $item->id_akreditas }}">{{ $item->akreditas }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                {{-- fasilitas --}}
                                <div class="form-group">
                                    <label for="nama">Fasilitas</label>
                                    <select class="form-control-select" style="width: 100%;"
                                        name="fasilitas_id_fasilitas" id="fasilitas_id_fasilitas">
                                        <option disabled value>Pilih Fasilitas</option>
                                        @foreach ($fas as $item)
                                            <option value="{{ $item->id_fasilitas }}">{{ $item->fasilitas }}</option>
                                        @endforeach
                                    </select>

                            

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
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
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
