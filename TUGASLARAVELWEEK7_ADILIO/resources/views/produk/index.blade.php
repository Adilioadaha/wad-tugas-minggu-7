<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk List</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
