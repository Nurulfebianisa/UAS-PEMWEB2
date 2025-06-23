@extends('prodis.layout') {{-- Pastikan 'prodis.layout' adalah layout master Anda --}}

@section('title', 'Edit Program Studi') {{-- Menambahkan title untuk halaman --}}

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Program Studi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('prodis.index') }}">Daftar Program Studi</a></li>
                            <li class="breadcrumb-item active">Edit Program Studi</li>
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
                                <h3 class="card-title">Form Edit Program Studi</h3>
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

                                {{-- Pastikan action diarahkan ke rute update, method PUT, dan tambahkan enctype untuk upload file --}}
                                <form action="{{ route('prodis.update', $prodi->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') {{-- Digunakan untuk HTTP PUT request --}}

                                    <div class="row">
                                        <div class="col-md-6"> {{-- Menggunakan grid Bootstrap untuk layout lebih baik --}}
                                            <div class="form-group">
                                                <label for="nama_prodi">Nama Program Studi:</label>
                                                <input type="text" name="nama_prodi" value="{{ old('nama_prodi', $prodi->nama_prodi) }}" class="form-control @error('nama_prodi') is-invalid @enderror" id="nama_prodi" placeholder="Masukkan Nama Program Studi">
                                                @error('nama_prodi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kode_prodi">Kode Program Studi:</label>
                                                <input type="text" name="kode_prodi" value="{{ old('kode_prodi', $prodi->kode_prodi) }}" class="form-control @error('kode_prodi') is-invalid @enderror" id="kode_prodi" placeholder="Masukkan Kode Program Studi">
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
                                                <input type="text" name="nama_kampus" value="{{ old('nama_kampus', $prodi->nama_kampus) }}" class="form-control @error('nama_kampus') is-invalid @enderror" id="nama_kampus" placeholder="Masukkan Nama Kampus">
                                                @error('nama_kampus')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="alamat">Alamat:</label>
                                                <input type="text" name="alamat" value="{{ old('alamat', $prodi->alamat) }}" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat">
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
                                                <input type="file" name="gambar" class="form-control-file @error('gambar') is-invalid @enderror" id="gambar">
                                                @error('gambar')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div> {{-- d-block agar pesan validasi muncul --}}
                                                @enderror
                                                @if($prodi->gambar)
                                                    <small class="form-text text-muted mt-2">Gambar saat ini:</small>
                                                    <img src="{{ asset('storage/prodi_images/' . $prodi->gambar) }}" alt="{{ $prodi->nama_prodi }}" class="img-thumbnail mt-2" style="max-width: 150px;">
                                                    <p class="text-muted mt-1">{{ $prodi->gambar }}</p>
                                                @else
                                                    <small class="form-text text-muted mt-2">Belum ada gambar.</small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
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