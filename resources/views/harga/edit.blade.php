@extends('mainlayout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jenis Obat</h2>
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
  
    <form action="{{ route('hargas.update',$harga->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col">
            <strong>Nama Obat:</strong>
                <select name="nama_obat" class="form-control">
                    <option value="">Pilih Nama Obat</option>
                    @foreach ($oobat as $item)
                        <option value="{{ $item->id }}"
                        @if ($item->id == $harga->nama_obat) selected @endif>
                                        {{ $item->namaobat}}
                        </option>
                    @endforeach
                </select>
        </div>
        <div class="col">
        <strong>Harga obat:</strong>
            <input type="number" class="form-control" placeholder="harga_obat" aria-label="Harga Obat">
        </div>
        </div>
   
    </form>
@endsection