<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Models\DetailPenjualan;
use Illuminate\Support\Facades\DB;

class DetailPenjualanController extends Controller
{
    public function create($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $produks = Produk::all(); // Ambil semua produk untuk dipilih
        return view('detailpenjualan.create', compact('penjualan', 'produks'));
    }

    public function store(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'dp_produk_id' => 'required|exists:produks,produk_id',
            'jumlah_produk' => 'required|integer|min:1',
            'total_harga' => 'required|numeric',
        ]);
        // Menggunakan transaksi untuk menjaga integritas data
        DB::transaction(function () use ($request, $id) {
        // Mengambil produk berdasarkan ID
        $produk = Produk::findOrFail($request->dp_produk_id);

        // Memeriksa apakah stok cukup
        if ($produk->stok < $request->jumlah_produk) {
            return redirect()->back()->with('error', 'Stok tidak cukup untuk produk ini.');
        }

        // Mengurangi stok produk
        $produk->stok -= $request->jumlah_produk;
        $produk->save();


        // Menyimpan detail penjualan
        $detailPenjualan = new DetailPenjualan();
        $detailPenjualan->dp_penjualan_id = $id;
        $detailPenjualan->dp_produk_id = $request->dp_produk_id;
        $detailPenjualan->jumlah_produk = $request->jumlah_produk;
        $detailPenjualan->total_harga = $request->total_harga;
        $detailPenjualan->save();
    });
        // Redirect kembali ke halaman utama
        return redirect('home')->with('success', 'Detail penjualan berhasil ditambahkan!');
    }

        public function show($detail_penjualan_id)
        {
            $penjualan = Penjualan::findOrFail($detail_penjualan_id);
            $detailPenjualans = $penjualan->detailPenjualans; // Ambil detail penjualan terkait

            // Mengambil detail penjualan berdasarkan ID penjualan
            $penjualan = Penjualan::findOrFail($detail_penjualan_id);
            $detailPenjualans = DetailPenjualan::where('dp_penjualan_id', $detail_penjualan_id)->get();

        // Menghitung total harga
            $totalHarga = $detailPenjualans->sum(function ($detail) {
            return $detail->total_harga; // Mengambil total_harga dari setiap detail penjualan
        });

            return view('detailpenjualan.show', compact('penjualan', 'detailPenjualans', 'totalHarga'));
        }
}
