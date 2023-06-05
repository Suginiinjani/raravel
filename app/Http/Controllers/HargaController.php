<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Harga;
use App\Models\Obat;

class HargaController extends Controller
{
    public function index(): View
    {
        $oobat = Obat::select('id', 'namaobat')->get();
        $harga = Harga::Join();
        // $harga = Harga::latest()->paginate(5);

        return view('harga.index', compact('oobat', 'harga'));
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        $oobat = Obat::select('id', 'namaobat')->get();
        return view('harga.create', compact('oobat'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_obat'=>'required',
            'harga_obat'=>'required'
        ]);
        Harga::create($request->all());

        return redirect()->route('hargas.index')
        ->with('success', 'Harga Berhasil Ditambahkan');
    }

    public function show(Harga $harga): View
    {
        $oobat = Obat::select('id', 'namaobat')->get();
        return view('harga.show', compact('oobat', 'harga'));
    }

    public function edit(Harga $harga): View
    {
        $oobat = Obat::select('id', 'namaobat')->get();
        return view('harga.show', compact('oobat', 'harga_obat'));
    }

    public function update(Request $request, Harga $harga): RedirectResponse
    {
        $request->validate([
            'nama_obat'=>'required',
            'harga_obat'=>'required'
        ]);
        $harga = Harga::create($request->all());

        return redirect()->route('harga.index')
        ->with('success', 'Harga Berhasil Ditambahkan');
    }

    public function destroy(Harga $harga): RedirectResponse
    {
        $harga->delete();

        return redirect()->route('harga.index')
        ->with('success', 'Harga obat deleted successfully');
    }
}
