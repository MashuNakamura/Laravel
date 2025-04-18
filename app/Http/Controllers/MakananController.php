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
        $validated = $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga_makanan' => 'required|numeric|min:0',
            'rating_makanan' => 'nullable|numeric|min:1|max:5',
        ]);

        Makanan::create($validated);

        return redirect()->route('makanan.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Untuk mengupdate resource database

    public function update(Request $request, Makanan $makanan): RedirectResponse
    {
        $validated = $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga_makanan' => 'required|numeric|min:0',
            'rating_makanan' => 'nullable|numeric|min:1|max:5',
        ]);

        $makanan->update($validated);

        return redirect()->route('makanan.index')->with('success', 'Data berhasil diupdate');
    }

    // Untuk menghapus resource dari database

    public function destroy(Makanan $makanan): RedirectResponse
    {
        $makanan->delete();
        return redirect()->route('makanan.index')->with('success', 'Data berhasil dihapus');
    }
}