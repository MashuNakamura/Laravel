<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MakananController extends Controller  
{

    // Untuk menampilkan sebuah resource sebanyak 10 data per halaman

    public function index(): View
    {
        $makanans = Makanan::latest()->paginate(10);
        return view('makanan.index', compact('makanans'));
    }

    // Menggunakan method create() untuk menampilkan form


    public function create(): View
    {
        return view('makanan.create');
    }

    // Untuk menampilkan detail resource menggunakan id

    public function show(Makanan $makanan): View
    {
        return view('makanan.show', compact('makanan'));
    }

    // Untuk menampilkan form edit resource menggunakan id

    public function edit(Makanan $makanan): View
    {
        return view('makanan.edit', compact('makanan'));
    }

    // Untuk menyimpan resource ke dalam database

    public function store(Request $request): RedirectResponse
    {

        Makanan::create([
            'nama_makanan' => $request->nama_makanan,
            'harga_makanan' => $request->harga_makanan,
            'rating_makanan' => $request->rating_makanan,
        ]);

        return redirect()->route('makanan.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Untuk mengupdate resource database

    public function update(Request $request, Makanan $makanan): RedirectResponse
    {

        $makanan->update([
            'nama_makanan' => $request->nama_makanan,
            'harga_makanan' => $request->harga_makanan,
            'rating_makanan' => $request->rating_makanan,
        ]);

        return redirect()->route('makanan.index')->with('success', 'Data berhasil diupdate');
    }

    // Untuk menghapus resource dari database

    public function destroy(Makanan $makanan): RedirectResponse
    {
        $makanan->delete();
        return redirect()->route('makanan.index')->with('success', 'Data berhasil dihapus');
    }
}