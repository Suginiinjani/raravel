@extends('mainlayout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Harga Obat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('hargas.create') }}"> Create Harga Obat</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nama Obat</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($harga as $hargaa)
        <tr>
            <td>
                @foreach ($oobat as $item)
                    @if ($item->id === $hargaa->$nama_obat)
                           {{ $item->namaobat }}
                    @endif
                @endforeach
            </td>
            <td>{{ $hargaa->harga_obat }}</td>
            <td>
                <form action="{{ route('hargas.destroy',$hargaa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('hargas.show',$hargaa->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('hargas.edit',$hargaa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection