@extends('mainlayout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Bentuk Obat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bentuks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Bentuk:</strong>
                {{ $bentuks->kode_bentuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bentuk Obat:</strong>
                {{ $bentuks->bentuk_obat }}
            </div>
        </div>
    </div>
@endsection