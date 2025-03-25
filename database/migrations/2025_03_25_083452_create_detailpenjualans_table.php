<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailpenjualans', function (Blueprint $table) {
            $table->bigIncrements('detail_penjualan_id');
                $table->foreignId('dp_penjualan_id')->constrained('penjualans', 'penjualan_id');
                $table->foreignId('dp_produk_id')->constrained('produks', 'produk_id');
                $table->integer('jumlah_produk');
                $table->decimal('total_harga');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualans');
    }
};
