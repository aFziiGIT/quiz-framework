<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::with('kategori')->get();
        return view('informasi.index', compact('informasi'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('informasi.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'judul'       => 'required|string|max:255',
            'ringkasan'   => 'required|string',
            'isi'         => 'required|string',
            'sumber'      => 'required|string|max:255',
            'status'      => 'required|string',
        ]);

        Informasi::create($validated);

        return redirect()->route('informasi.index');
    }

    public function edit(Informasi $informasi)
    {
        $kategori = Kategori::all();
        return view('informasi.edit', compact('informasi', 'kategori'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'judul'       => 'required|string|max:255',
            'ringkasan'   => 'required|string',
            'isi'         => 'required|string',
            'sumber'      => 'required|string|max:255',
            'status'      => 'required|string',
        ]);

        $informasi->update($validated);

        return redirect()->route('informasi.index');
    }

    public function destroy(Informasi $informasi)
    {
        $informasi->delete();
        return redirect()->route('informasi.index');
    }
}