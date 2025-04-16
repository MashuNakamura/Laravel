@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Tambah Makanan</h1>
    <form action="{{ route('makanan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga_makanan" class="form-label">Harga</label>
            <input type="text" name="harga_makanan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="rating_makanan" class="form-label">Rating</label>
            <input type="number" name="rating_makanan" class="form-control" min="0" max="5">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('makanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection