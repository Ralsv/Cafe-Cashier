<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::paginate(5);
        return view('produk.index', compact('produks'));
    }

    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'nama_produk' => 'required',
    //         'harga' => 'required',
    //         'stok' => 'required'
    //     ]);

    //     // Menyimpan data penjualan
    //     $produk = new Produk();
    //     $produk->produk_id = $request->produuk_id;
    //     $produk->nama_produk = $request->nama_produk;
    //     $produk->harga = $request->harga;
    //     $produk->stok = $request->stok;
    //     $produk->save();

    //     // Redirect kembali ke halaman utama
    //     return redirect('produk.index')->with('success', 'Data penjualan berhasil ditambahkan!');
    // }

    public function create()
    {
        return view('produk.create');

    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0'
        ]);
        $data = Produk::create($validation);   
        if ($data) {
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('produk.index'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('produk.index'));
        }
    }


    public function delete($produk_id)
    {

        $produk = Produk::findOrFail($produk_id)->delete();
        if ($produk) {
            session()->flash('success', 'Product Delete Successfully');
            return redirect(route('produk.index'));
        } else {
        session()->flash('error', 'Product Not Delete succesfully');
        return redirect(route('produk.index'));
        }
    }

    public function edit($produk_id)
    {
        $produk = Produk::findOrFail($produk_id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $produk_id)
{
    
    $request->validate([
        'nama_produk' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0',
        'stok' => 'required|integer|min:0'
        
    ]);

    
    $produk = Produk::findOrFail($produk_id);

    
    $produk->nama_produk = $request->nama_produk;
    $produk->harga = $request->harga;
    $produk->stok = $request->stok;
    
    $produk->save();

    
    return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
}
}
