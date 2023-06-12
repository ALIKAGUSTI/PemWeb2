<?php

namespace App\Http\Controllers;

use App\Models\TipeMobil;
use Illuminate\Http\Request;

class TipeMobilController extends Controller
{
    function index() 
    {
        $tipeMobil = TipeMobil::get();
        return view('pages.tipe.index',['tipeMobil'=>$tipeMobil]);
    }
     function create()
    {
        return view('pages.tipe.create');
    }
    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'tahun' => 'required|numeric'
        ]);

        TipeMobil::create($request->all());

        return redirect()->route('tipe.index')->with('success', 'Tipe mobil berhasil ditambahkan.');
    }
    function edit(TipeMobil $tipeMobil)
    {
        return view('pages.tipe.edit', ['tipeMobil' => $tipeMobil]);
    }
    function update(Request $request, TipeMobil $tipeMobil)
    {
        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'tahun' => 'required|numeric'
        ]);

        $tipeMobil->update($request->all());

        return redirect()->route('tipe.index')->with('success', 'Tipe mobil berhasil diperbarui.');
    }
    function destroy(TipeMobil $tipeMobil)
    {
        $tipeMobil->delete();

        return redirect()->route('tipe.index')->with('success', 'Tipe mobil berhasil dihapus.');
    }
}


