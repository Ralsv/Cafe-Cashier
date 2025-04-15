<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $penjualans = Penjualan::paginate(6);
        return view('home', compact('penjualans'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'tanggal_penjualan' => 'required|date',
            'nama_pelanggan' => 'required|string|max:255',
        ]);


        
        $penjualan = new Penjualan();
        $penjualan->tanggal_penjualan = $request->tanggal_penjualan;
        $penjualan->nama_pelanggan = $request->nama_pelanggan;
        $penjualan->save();

        
        return redirect('/home')->with('success', 'Data penjualan berhasil ditambahkan!');
    }

    public function delete($penjualan_id)
    {
        
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
