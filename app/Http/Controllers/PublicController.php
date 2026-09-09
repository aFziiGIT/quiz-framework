<?php

namespace App\Http\Controllers;

use App\Models\Informasi;

class PublicController extends Controller
{
    public function index()
    {
        $informasi = Informasi::with('kategori')->where('status', 'Published')->get();
        return view('public.index', compact('informasi'));
    }

    public function show(Informasi $informasi)
    {
        return view('public.show', compact('informasi'));
    }
}