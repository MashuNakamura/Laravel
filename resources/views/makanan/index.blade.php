{{-- <!DOCTYPE html>
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
                <tr>
                    <th>#</th>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($makanans as $makanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $makanan->nama_makanan }}</td>
                        <td>{{ $makanan->harga_makanan }}</td>
                        <td>{{ $makanan->created_at->format('d-m-Y H:i:s') }}</td> 
                        <td>
                            <a href="{{ route('makanan.show', $makanan->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('makanan.edit', $makanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('makanan.destroy', $makanan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('makanan.create') }}" class="btn btn-primary">Tambah Makanan</a>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
    <style>
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        form {
            display: inline;
        }

    </style>
</head>
<body>
    <div>
        <h1>Daftar Makanan</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($makanans as $makanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $makanan->nama_makanan }}</td>
                        <td>{{ $makanan->harga_makanan }}</td>
                        <td>
                            <form action="{{ route('makanan.show', $makanan->id) }}" method="GET" class="d-inline">
                                <button type="submit" class="btn-info">Detail</button>
                            </form>
                            <form action="{{ route('makanan.edit', $makanan->id) }}" method="GET" class="d-inline">
                                <button type="submit" class="btn-warning">Edit</button>
                            </form>
                            <form action="{{ route('makanan.destroy', $makanan->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('makanan.create') }}" method="GET" class="d-inline">
            <button type="submit" class="btn-info">Tambah Makanan</button>
        </form>
    </div>
</body>
</html>