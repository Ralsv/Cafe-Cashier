<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/3207e489d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
</head>

<body>
    <div class="container mt-5">
        <h1>Nama Pelanggan: {{ $penjualan->nama_pelanggan }}</h1>
        <p>Tanggal Penjualan: {{ $penjualan->tanggal_penjualan }}</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detailPenjualans as $detail)
                    <tr>
                        <td>{{ $detail->produk->nama_produk }}</td>
                        <td>{{ $detail->jumlah_produk }}</td>
                        <td>{{ number_format($detail->total_harga, 3) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h4>Total Harga Semua Produk: {{ number_format($totalHarga, 3) }}</h4>
        <br>
        <br>
        {{-- <a href="{{ url('/home') }}"><button><i class="fa-solid fa-arrow-left"></i></button></a> --}}
        <button onclick="window.print()"><i class="fa fa-print"></i></button>
    </div>
</body>
</html>
