<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/3207e489d8.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .button2 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 7px 15px;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            text-decoration: none;
            color: white;
            background: #C38154;
            cursor: pointer;
            transition: ease-out 0.5s;
            border: 2px solid #C38154;
            border-radius: 8px;
            box-shadow: inset 0 0 0 0 #C38154;
        }

        .button2:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #c5733d;
        }

        .button2:active {
            transform: scale(0.9);
        }

        .button1 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 7px 15px;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            text-decoration: none;
            color: white;
            background: #397088;
            cursor: pointer;
            transition: ease-out 0.5s;
            border: 2px solid #397088;
            border-radius: 8px;
            box-shadow: inset 0 0 0 0 #397088;
        }

        .button1:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #1c475a;
        }

        .button1:active {
            transform: scale(0.9);
        }

        .th1 {
            background-color: #884A39 color: white;
        }

        .button4 {
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

        .button4:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #67301f;
        }

        .button4:active {
            transform: scale(0.9);
        }

        .button3 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 7px 15px;
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('produk.create') }}" class="button4">Tambah Produk</a>
                    <br>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-[#F9E0BB] text-black">
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk)
                                <tr>
                                    <td>{{ $produk->nama_produk }}</td>
                                    <td>Rp {{ number_format($produk->harga, 3) }}</td>
                                    <td>{{ $produk->stok }}</td>
                                    <td class="align-middle">
                                        <div class="btn btn-group mx-1 space-x-2" role="group aria-label="Basic
                                            example">
                                            <a href="{{ route('produk.edit', ['produk_id' => $produk->produk_id]) }}"><button class="button2">Update</button></a>
                                            <a href="{{ route('produk.delete', ['produk_id' => $produk->produk_id]) }}"><button class="button3">Delete</button></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{ $produks->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
