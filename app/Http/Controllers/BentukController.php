<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Bentuk;

class BentukController extends Controller
{
    public function index(): View
    {
        $bentuks = Bentuk::latest()->paginate(5);

        return view('bentuks.index', compact('bentuks'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('bentuks.create');
    }

    public function store(Request $request): Redirectresponse
    {
        $request->validate([
            'kode_bentuk'=>'required',
            'bentuk_obat'=>'required',
        ]);
        Bentuk::create($request->all());

        return redirect()->route('bentuks.index')
        ->with ('success', 'Bentuk obat berhasil ditambahkan');
    }

    public function show(Bentuk $bentuks): View
    {
        return view('bentuks.show', compact('bentuks'));
    }

    public function edit(Bentuk $bentuks): View
    {
        return view('bentuks.edit', compact('bentuks'));
    }

    public function update(Request $request, Bentuk $bentuks): Redirectresponse
    {
        $request->validate([
            'kode_bentuk'=>'required',
            'bentuk_obat'=>'required'
        ]);
        $bentuks->update($request->all());
        return redirect()->route('bentuks.index')
        ->with ('success', 'Bentuk obat berhasil diupdate');
    }

    public function destroy(Bentuk $bentuks): Redirectresponse
    {
        $bentuks->delete();

        return redirect()->route('bentuks.index')
        ->with ('success', 'Bentuk obat berhasil dihapus');
    }
}
