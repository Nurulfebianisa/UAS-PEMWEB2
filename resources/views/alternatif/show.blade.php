@extends('data_prodi.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show alternatif</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('data_prodi.index') }}"> Back</a>
            </div>
        </div>
    </div>
     

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>alternatif:</strong>
                {{ $alternatif->alternatif }}
            </div>
        </div>
   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bobot:</strong>
                {{ $alternatif->bobot }}
            </div>
           
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Label:</strong>
                {{ $alternatif->label }}
            </div>
            
            </div>
        </div>
        
    </div>
@endsection