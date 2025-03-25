<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans';

    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'dp_penjualan_id', 'penjualan_id');
    }
}
