<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .button4 {
                position: relative;
                display: inline-block;
                margin: 5px;
                padding: 7px 12px;
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
            <tr>
                
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
                <tr>
                    
                    <td>{{ $produk->nama_produk }}</td>
                    <td>Rp {{ number_format($produk->harga, 3) }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td class="align-middle">
                        <div class="btn btn-group mx-1 space-x-4" role="group aria-label="Basic example">
                        <a href="{{ route('produk.edit', ['produk_id'=>$produk->produk_id]) }}"><button class="btn btn-primary">Update</button></a> 
                        <a href="{{ route('produk.delete', ['produk_id'=>$produk->produk_id]) }}"><button class="btn btn-danger">Delete</button></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
