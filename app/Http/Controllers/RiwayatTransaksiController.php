<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    
    public function index()
{
    
    $detailPenjualans = DetailPenjualan::with(['penjualan', 'produk'])->get();

    return view('riwayat_transaksi.index', compact('detailPenjualans'));
}
}