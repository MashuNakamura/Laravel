<!-- resources/views/buku/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Buku</h1>

    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>
                        <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection