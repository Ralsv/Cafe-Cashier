<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    protected $table = 'penjualans'; // Nama tabel
    protected $primaryKey = 'penjualan_id'; // Menentukan primary key
    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'dp_penjualan_id', 'penjualan_id');
    }
}
