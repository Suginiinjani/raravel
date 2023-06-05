<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class JenisController extends Controller
{
    public function index(): View
    {
        $jenis = Jenis::latest()->paginate(5);

        return view('jenis.index', compact ('jenis'))
        -> with ('i', ((request()->input('page', 1) - 1) * 5));
    }

    public function create(): View
    {
        return view('jenis.create');
    }

    public function store(Request $request): Redirectresponse
    {
        $request->validate([
            'kode'=>'required',
            'jenis_obat'=>'required',
        ]);
        Jenis::create($request->all());

        return redirect()->route('jenis.index')
        ->with('success', 'Jenis berhasil dibuat');
    }

    public function show(Jenis $jenis): View
    {
        return view('jenis.show', compact('jenis'));
    }

    public function edit(Jenis $jenis): View
    {
        return view('jenis.edit', compact('jenis'));
    }

    public function update(Request $request, Jenis $jenis): Redirectresponse
    {
        $request->validate([
            'kode'=>'required',
            'jenis_obat'=>'required',
        ]);
        $jenis->update($request->all());
        return redirect()->route('jenis.index')
        ->with('success', 'Jenis obat berhasil di update');
    }

    public function destroy(Jenis $jenis): Redirectresponse
    {
        $jenis->delete();

        return redirect()->route('jenis.index')
        ->with('success', 'Jenis obat berhasil dihapus');
    }
}
