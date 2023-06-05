@extends('mainlayout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New obat</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('obats.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('obats.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Obat :</strong>
                <input type="text" name="kode" class="form-control" placeholder="Kode">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Obat:</strong>
                <input class="form-control" name="namaobat" placeholder="Nama Obat"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dosis:</strong>
                <input class="form-control" name="dosis" placeholder="Dosis"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Efek Samping:</strong>
                <input class="form-control" name="efek" placeholder="Efek Samping"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Jenis Obat:</strong>
            <select name="jenis_obat" class="form-control">
                <option value="">Pilih Jenis Obat</option>
                @foreach ($jenis as $item)
                    <option value="{{ $item->id }}">{{ $item->jenis_obat }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Bentuk Obat:</strong>
            <select name="kategori" class="form-control">
                <option value="">Pilih Bentuk Obat</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->bentuk_obat }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection