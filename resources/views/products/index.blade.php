<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f1f1f1;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }

        .btn-danger {
            background-color: #f44336;
            padding: 8px 16px;
        }

        .btn-danger:hover {
            background-color: #d32f2f;
        }

        .actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .no-products {
            text-align: center;
            font-style: italic;
            color: #999;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            table, th, td {
                font-size: 14px;
            }

            .button, .btn-danger {
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>

        <a href="{{ route('products.create') }}" class="button">+ Add Product</a>

        <table>
            <thead>
                <tr>
                    <th>Name</th><th>Description</th><th>Price</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->price }}</td>
                    <td class="actions">
                        <a href="{{ route('products.edit', $p->id) }}" class="button">Edit</a>
                        <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button btn-danger" onclick="return confirm('Yakin mau hapus produk ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if ($products->isEmpty())
                <tr>
                    <td colspan="4" class="no-products">Tidak ada produk.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>