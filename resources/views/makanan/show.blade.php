<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Detail Makanan</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nama :</strong> {{ $makanan->nama_makanan }}</li>
            <li class="list-group-item"><strong>Harga :</strong> {{ $makanan->harga_makanan }}</li>
            <li class="list-group-item"><strong>Rating :</strong> {{ $makanan->rating_makanan }}</li>
        </ul>
        <a href="{{ route('makanan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>

</html>
