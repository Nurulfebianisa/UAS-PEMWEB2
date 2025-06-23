@extends('prodis.layout') {{-- Ensure 'prodis.layout' is your master layout --}}

@section('title', 'Tambah Program Studi Baru') {{-- Add a title for the page --}}

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Program Studi Baru</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('prodis.index') }}">Daftar Program Studi</a></li>
                            <li class="breadcrumb-item active">Tambah Baru</li>
                        </ol>
                    </div>
                </div>
            </div></section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Form Tambah Program Studi</h3>
                                <div class="card-tools">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('prodis.index') }}">
                                        <i class="fas fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                {{-- Ensure action points to store route and add enctype for file upload --}}
                                <form action="{{ route('prodis.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6"> {{-- Use Bootstrap grid for better layout --}}
                                            <div class="form-group">
                                                <label for="nama_prodi">Nama Program Studi:</label>
                                                <input type="text" name="nama_prodi" value="{{ old('nama_prodi') }}"
                                                    class="form-control @error('nama_prodi') is-invalid @enderror"
                                                    id="nama_prodi" placeholder="Masukkan Nama Program Studi">
                                                @error('nama_prodi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode_prodi">Kode Program Studi:</label>
                                                <input type="text" name="kode_prodi" value="{{ old('kode_prodi') }}"
                                                    class="form-control @error('kode_prodi') is-invalid @enderror"
                                                    id="kode_prodi" placeholder="Masukkan Kode Program Studi">
                                                @error('kode_prodi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_kampus">Nama Kampus:</label>
                                                <input type="text" name="nama_kampus" value="{{ old('nama_kampus') }}"
                                                    class="form-control @error('nama_kampus') is-invalid @enderror"
                                                    id="nama_kampus" placeholder="Masukkan Nama Kampus">
                                                @error('nama_kampus')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="alamat">Alamat:</label>
                                                <input type="text" name="alamat" value="{{ old('alamat') }}"
                                                    class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                                    placeholder="Masukkan Alamat">
                                                @error('alamat')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gambar">Gambar Program Studi:</label>
                                                <input type="file" name="gambar"
                                                    class="form-control-file @error('gambar') is-invalid @enderror"
                                                    id="gambar">
                                                @error('gambar')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">Unggah gambar untuk program studi.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ route('prodis.index') }}" class="btn btn-secondary">Batal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection