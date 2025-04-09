<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/3207e489d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <style>
        .button1 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 4px 10px;
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

            .button2 {
                position: relative;
                display: inline-block;
                margin: 5px;
                padding: 4px 10px;
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

            .button3 {
                position: relative;
                display: inline-block;
                margin: 5px;
                padding: 4px 10px;
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
                .card {
                    background-color: #F9E0BB;
                }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <br>
                    <br>
                    <br>
                        <div class="row">
                            @foreach($penjualans as $penjualan)
                            <div class="col-md-4 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $loop->iteration }}</h4>
                                        <h4 class="card-title">{{ $penjualan->nama_pelanggan }}</h4>
                                        <p class="card-text">{{ $penjualan->tanggal_penjualan }}</p>
                                        <a href="{{ route('detailpenjualan.show', $penjualan->penjualan_id) }}" class="button2">Detail</a>
                                        <a href="{{ route('detailpenjualan.create', $penjualan->penjualan_id) }}" class="button1"><i class="fa-solid fa-plus"></i></a>
                                        <a href="{{ route('home.delete', ['penjualan_id'=>$penjualan->penjualan_id]) }}"><button class="button3"><i class="fa-solid fa-minus"></i></button></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <br>
                        <br>
                        <br>
                        <hr>
                        <br>
                        <br>
                        <br>
                        <!-- Form untuk menambahkan data pelanggan -->
                        <form action="{{ route('penjualan.store') }}" method="POST" class="mb-4">
                            @csrf
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="tanggal_penjualan">Tanggal Penjualan</label>
                                <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" required>
                            </div>
                            <br>
                            <button type="submit" class="button4">Tambah Penjualan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
