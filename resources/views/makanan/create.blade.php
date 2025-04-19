<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('makanan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>