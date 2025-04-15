<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Detail Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .button1 {
        position: relative;
        display: inline-block;
        margin: 5px;
        padding: 8px 16px;
        text-align: center;
        font-size: 15px;
        letter-spacing: 1px;
        text-decoration: none;
        color: white;
        background: #884A39;
        cursor: pointer;
        transition: ease-out 0.5s;
        border: 2px solid #884A39;
        border-radius: 8px;
        box-shadow: inset 0 0 0 0 #884A39;
    }

    .button1:hover {
        color: white;
        box-shadow: inset 0 -100px 0 0 #67301f;
    }

    .button1:active {
        transform: scale(0.9);
    }

    .button3 {
        position: relative;
        display: inline-block;
        margin: 5px;
        padding: 8px 16px;
        text-align: center;
        font-size: 15px;
        letter-spacing: 1px;
        text-decoration: none;
        color: white;
        background: #BF3131;
        cursor: pointer;
        transition: ease-out 0.5s;
        border: 2px solid #BF3131;
        border-radius: 8px;
        box-shadow: inset 0 0 0 0 #BF3131;
    }

    .button3:hover {
        color: white;
        box-shadow: inset 0 -100px 0 0 #BF3131;
    }

    .button3:active {
        transform: scale(0.9);
    }
</style>

<body>
    <div class="container mt-5">
        <h1>Detail Penjualan :</h1>
        <h2>{{ $penjualan->nama_pelanggan }}</h2>

        <form action="{{ route('detailpenjualan.store', $penjualan->penjualan_id) }}" method="POST">        
            @csrf
            <div class="form-group my-4">
                <label for="dp_produk_id">Pilih Produk</label>
                <select class="form-control" id="dp_produk_id" name="dp_produk_id" required>
                    <option value="">-- Pilih Produk --</option>
                    @foreach ($produks as $produk)
                        <option value="{{ $produk->produk_id }}" data-harga="{{ $produk->harga }}">
                            {{ $produk->nama_produk }} - Rp {{ number_format($produk->harga, 3) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group my-4">
                <label for="jumlah_produk">Jumlah Produk</label>
                <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" required
                    min="1">
            </div>
            <div class="form-group my-4">
                <label for="total_harga">Total Harga</label>
                <input type="number" class="form-control" id="total_harga" name="total_harga" required step="0.01"
                    readonly>
            </div>
            <button type="submit" class="button1">Tambah Detail Penjualan</button>
            <a href="{{ url('home') }}" class="button3">Kembali</a>

        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const produkSelect = document.getElementById('dp_produk_id');
            const jumlahInput = document.getElementById('jumlah_produk');
            const totalHargaInput = document.getElementById('total_harga');

            function calculateTotal() {
                const selectedOption = produkSelect.options[produkSelect.selectedIndex];
                const harga = parseFloat(selectedOption.getAttribute('data-harga')) || 0;
                const jumlah = parseInt(jumlahInput.value) || 0;
                const total = harga * jumlah;
                totalHargaInput.value = total.toFixed(3); 
            }

            produkSelect.addEventListener('change', calculateTotal);

            jumlahInput.addEventListener('input', calculateTotal);
        });
    </script>
</body>
</html>
