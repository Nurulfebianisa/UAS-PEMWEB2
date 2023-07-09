@extends('prodis.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show prodi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('prodis.index') }}"> Back</a>
            </div>
        </div>
    </div>
     

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Program Studi:</strong>
                {{ $prodi->nama_prodi }}
            </div>
        </div>
   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Program Studi:</strong>
                {{ $prodi->kode_prodi }}
            </div>
           
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kampus:</strong>
                {{ $prodi->nama_kampus }}
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    {{ $prodi->alamat }}
                </div>
            
            </div>
        </div>
        
    </div>
@endsection