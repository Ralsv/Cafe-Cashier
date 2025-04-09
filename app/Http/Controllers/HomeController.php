<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $penjualans = Penjualan::all();
        return view('home', compact('penjualans'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal_penjualan' => 'required|date',
            'nama_pelanggan' => 'required|string|max:255',
        ]);


        // Menyimpan data penjualan
        $penjualan = new Penjualan();
        $penjualan->tanggal_penjualan = $request->tanggal_penjualan;
        $penjualan->nama_pelanggan = $request->nama_pelanggan;
        $penjualan->save();

        // Redirect kembali ke halaman utama
        return redirect('/home')->with('success', 'Data penjualan berhasil ditambahkan!');
    }

    public function delete($penjualan_id)
    {
        // Hapus detail penjualan terkait
        DetailPenjualan::where('dp_penjualan_id', $penjualan_id)->delete();

        $penjualan = Penjualan::findOrFail($penjualan_id)->delete();
        if ($penjualan) {
            session()->flash('success', 'Product Delete Successfully');
            return redirect(route('home'));
        } else {
        session()->flash('error', 'Product Not Delete succesfully');
        return redirect(route('home'));
        }
    }
}
