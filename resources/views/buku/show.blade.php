<!-- resources/views/buku/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Buku</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $buku->judul }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
            <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>

    <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Buku</a>
@endsection