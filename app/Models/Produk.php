<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{


    protected $table = 'produks';

    protected $primaryKey = 'produk_id';

    use HasFactory;

    
    protected $fillable = ['nama_produk', 'harga', 'stok']; 
    
    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'dp_produk_id', 'produk_id');
    }
}
