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
            <h1>Update Produk</h1>
            <form action="{{ route('produk.update', $produk->produk_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-4">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" name="nama_produk" class="form-control"
                        value="{{ old('nama_produk', $produk->nama_produk) }}" required>
                </div>
                <div class="form-group my-4">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}"
                        required>
                </div>
                <div class="form-group my-4">
                    <label for="stok">Stok:</label>
                    <input type="number" name="stok" class="form-control" value="{{ old('stok', $produk->stok) }}"
                        required>
                </div>
                <button type="submit" class="button1">Update</button>
                <a href="{{ route('produk.index') }}" class="button3">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
