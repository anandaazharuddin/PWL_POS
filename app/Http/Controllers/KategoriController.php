<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{

    public function create(): View
    {
        return view('kategori.create');
    }
    public function store(Request $request): RedirectResponse
    {
    $validated = $request->validate([
        'kategori_kode' => 'required' ,
        'kategori_nama' => 'required' ,
    ]);

    return redirect('/kategori');
    }
  

}