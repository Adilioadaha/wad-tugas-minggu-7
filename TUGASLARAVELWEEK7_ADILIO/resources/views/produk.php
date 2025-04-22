<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    @if($produk->isEmpty())
        <p>Belum ada produk yang ditambahkan.</p>
    @else
        <ul>
            @foreach ($produk as $item)
                <li>{{ $item->nama }} - Rp{{ number_format($item->harga, 0, ',', '.') }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>
