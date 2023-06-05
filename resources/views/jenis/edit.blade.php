@extends('mainlayout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jenis Obat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jenis.index') }}"> Back</a>
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
  
    <form action="{{ route('jenis.update',$jenis->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Kode</label>
            <input type="number" name="kode" class="form-control" placeholder="Kode">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jenis Obat</label>
            <input type="text" class="form-control" name="jenis_obat" placeholder="Jenis Obat">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
   
    </form>
@endsection