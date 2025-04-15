<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            box-shadow: inset 0 -100px 0 0 #881919;
        }

        .button3:active {
            transform: scale(0.9);
        }
    </style>
    <div class="py-12">
        <div class="container">
            <h1>Tambah Produk</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Gagal!</strong> Ada beberapa masalah dengan input Anda.<br>

                </div>
            @endif

            <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="form-group my-4">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                </div>
                <div class="form-group my-4">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" step="0.01" required>
                </div>
                <div class="form-group my-4">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" required>
                </div>
                <br>
                <button type="submit" class="button1">Simpan</button>
                <a href="{{ route('produk.index') }}" class="button3">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
