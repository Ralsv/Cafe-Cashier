<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat Transaksi') }}
        </h2>
    </x-slot>
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
</style>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
        @if($detailPenjualans->isEmpty())
            <div class="alert alert-warning">Tidak ada transaksi yang ditemukan.</div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Nama Pelanggan</th> <!-- Kolom untuk nama pelanggan -->
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Tanggal Penjualan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detailPenjualans as $detail)
                        <tr>
                            
                            <td>{{ $detail->penjualan->nama_pelanggan ?? 'N/A' }}</td> <!-- Menampilkan nama pelanggan -->
                            <td>{{ $detail->produk->nama_produk }}</td>
                            <td>{{ $detail->jumlah_produk }}</td>
                            <td>Rp {{ number_format($detail->total_harga, 3) }}</td>
                            <td>{{ $detail->penjualan->tanggal_penjualan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    </div>
    </div>
    </div>
</x-app-layout>