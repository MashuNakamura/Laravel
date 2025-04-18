<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Makanan</h1>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    {{-- <th>Tanggal Dibuat</th> --}}
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($makanans as $makanan)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $makanan->nama_makanan }}</td>
                        <td class="text-center">{{ $makanan->harga_makanan }}</td>
                        {{-- <td>{{ $makanan->created_at->format('d-m-Y H:i:s') }}</td> --}}
                        <td class="text-center">
                            <a href="{{ route('makanan.show', $makanan->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('makanan.edit', $makanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('makanan.destroy', $makanan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('makanan.create') }}" class="btn btn-primary">Tambah Makanan</a>
    </div>
</body>

</html>
