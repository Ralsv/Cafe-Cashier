<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'dp_produk_id', 'produk_id');
    }
}
