<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
    protected $table = 'detail_penjualans';

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'dp_penjualan_id', 'penjualan_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'dp_produk_id', 'produk_id');
    }
}
