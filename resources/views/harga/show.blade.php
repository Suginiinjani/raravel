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

<div class="row">
        <div class="col">
            <strong>Nama Obat:</strong>
                    @foreach ($oobat as $item)
                        @if ($item->id === $harga->nama_obat)
                        {{ $item->nama_obat }}
                        @endif
                    @endforeach
        </div>
        <div class="col">
        <strong>Harga obat:</strong>
        {{ $harga->harga_obat }}
        </div>
        </div>