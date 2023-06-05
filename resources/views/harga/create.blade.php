@extends('mainlayout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Harga Obat</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('hargas.index') }}"> Back</a>
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
   
<form action="{{ route('hargas.store') }}" method="POST">
    @csrf
        <div class="row">
        <div class="col">
            <strong>Nama Obat:</strong>
                <select name="nama_obat" class="form-control">
                    <option value="">Pilih Nama Obat</option>
                    @foreach ($oobat as $item)
                        <option value="{{ $item->id }}">{{ $item->namaobat  }}</option>
                    @endforeach
                </select>
        </div>
        <div class="col">
        <strong>Harga obat:</strong>
            <input type="number" class="form-control" name="harga_obat" placeholder="Harga Obat">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
@endsection
