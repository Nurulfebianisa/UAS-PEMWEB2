@extends('kriterias.layout')
@section('title', $title)
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Kriteria</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Kriteria</li>
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
                                <h3 class="card-title">Kriteria</h3>
                                <div class="card-tools">
                                    <a href="/createKriteria" class="btn btn-primary btn-lg btn-block " role="button"
                                        aria-pressed="true">Tambah Kriteria</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Label</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    @foreach ($kriterias as $kriteria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $kriteria->kriteria }}</td>
                                            <td>{{ $kriteria->bobot }}</td>
                                            <td>{{ $kriteria->label }}</td>




                                            <td>
                                                <form action="{{ route('kriterias.destroy', $kriteria->id) }}"
                                                    method="POST">

                                                    <a class="btn btn-info"
                                                        href="{{ route('kriterias.show', $kriteria->id) }}">Show</a>

                                                    <a class="btn btn-primary"
                                                        href="{{ route('kriterias.edit', $kriteria->id) }}">Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>


                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                </tr>
                                </br>


                                {{ $kriterias->onEachSide(1)->links() }}
                            </div>
                                </br>

                                {{-- {{!! $kriterias->appends(['sort' => 'votes'])->links()}} --}}

                                {{-- {!! $kriterias->links() !!} --}}
                            @endsection
