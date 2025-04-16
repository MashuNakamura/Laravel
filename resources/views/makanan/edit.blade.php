@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Edit Makanan</h1>
    <form action="{{ route('makanan.update', $makanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" value="{{ $makanan->nama_makanan }}" required>
        </div>
        <div class="mb-3">
            <label for="harga_makanan" class="form-label">Harga</label>
            <input type="text" name="harga_makanan" class="form-control" value="{{ $makanan->harga_makanan }}" required>
        </div>
        <div class="mb-3">
            <label for="rating_makanan" class="form-label">Rating</label>
            <input type="number" name="rating_makanan" class="form-control" min="0" max="5" value="{{ $makanan->rating_makanan }}">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('makanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection