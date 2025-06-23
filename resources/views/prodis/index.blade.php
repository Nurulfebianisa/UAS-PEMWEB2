@extends('prodis.layout') {{-- Pastikan 'prodis.layout' adalah layout master Anda --}}

@section('title', 'Daftar Program Studi') {{-- Menambahkan title untuk halaman --}}

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Program Studi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Program Studi</li>
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
                                <h3 class="card-title">Program Studi</h3>
                                <div class="card-tools">
                                    {{-- Menggunakan route() untuk link yang lebih dinamis --}}
                                    <a href="{{ route('prodis.create') }}" class="btn btn-primary btn-lg btn-block" role="button"
                                        aria-pressed="true">Tambah Program Studi</a>
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- Menampilkan pesan sukses jika ada --}}
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <table class="table table-bordered table-striped"> {{-- Menambahkan class table-striped untuk tampilan yang lebih baik --}}
                                    <thead> {{-- Menggunakan thead untuk header tabel --}}
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Program Studi</th>
                                            <th>Kode Program Studi</th>
                                            <th>Nama Kampus</th>
                                            <th>Alamat</th>
                                            <th>Gambar</th> {{-- Kolom baru untuk gambar --}}
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> {{-- Menggunakan tbody untuk isi tabel --}}
                                        @forelse ($prodis as $prodi) {{-- Menggunakan @forelse untuk handle jika $prodis kosong --}}
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $prodi->nama_prodi }}</td>
                                                <td>{{ $prodi->kode_prodi }}</td>
                                                <td>{{ $prodi->nama_kampus }}</td>
                                                <td>{{ $prodi->alamat }}</td>
                                                <td>
                                                    @if ($prodi->gambar)
                                                        {{-- Asumsi gambar disimpan di folder storage/app/public/prodi_images dan disymlink ke public/storage --}}
                                                        <img src="{{ asset('storage/prodi_images/' . $prodi->gambar) }}" alt="{{ $prodi->nama_prodi }}" style="width: 100px; height: auto;">
                                                    @else
                                                        Tidak ada gambar
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('prodis.destroy', $prodi->id) }}" method="POST">
                                                        <a class="btn btn-info btn-sm" href="{{ route('prodis.show', $prodi->id) }}">Show</a>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('prodis.edit', $prodi->id) }}">Edit</a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data program studi.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{-- Bagian pagination --}}
                                <div class="d-flex justify-content-center mt-3">
                                    {{ $prodis->links('pagination::bootstrap-4') }} {{-- Menggunakan tema Bootstrap 4 untuk pagination --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection