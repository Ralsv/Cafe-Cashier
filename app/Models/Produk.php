<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{


    protected $table = 'produks';

    protected $primaryKey = 'produk_id';

    use HasFactory;

    // Tambahkan kolom yang ingin diisi secara massal
    protected $fillable = ['nama_produk', 'harga', 'stok']; // Pastikan semua kolom yang relevan ada di sini
    
    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'dp_produk_id', 'produk_id');
    }
}
