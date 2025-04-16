<!-- resources/views/buku/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Buku</h1>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" required>
        </div>

        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </form>
@endsection