@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Detail Makanan</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ $makanan->nama_makanan }}</li>
        <li class="list-group-item"><strong>Harga:</strong> {{ $makanan->harga_makanan }}</li>
        <li class="list-group-item"><strong>Rating:</strong> {{ $makanan->rating_makanan }}</li>
    </ul>
    <a href="{{ route('makanan.index') }}" class="btn btn-primary mt-3">Kembali</a>
</div>
@endsection