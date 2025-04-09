<?php

use App\Models\Penjualan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\RiwayatTransaksiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/home', function () {
    $penjualans = Penjualan::all(); // Mengambil semua data penjualan
    return view('home', compact('penjualans'));
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/penjualan', [HomeController::class, 'store'])->name('penjualan.store');
Route::get('home/delete/{penjualan_id}', [HomeController::class, 'delete'])->name('home.delete');


Route::get('/penjualan/{id}/detail', [DetailPenjualanController::class, 'create'])->name('detailpenjualan.create');
Route::post('/penjualan/{id}/detail', [DetailPenjualanController::class, 'store'])->name('detailpenjualan.store');
Route::get('/penjualan/{id}/detail-view', [DetailPenjualanController::class, 'show'])->name('detailpenjualan.show');
Route::get('/riwayat-transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat-transaksi');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create'); // Menampilkan form tambah produk
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store'); // Menyimpan produk baru
Route::get('produk/delete/{produk_id}', [ProdukController::class, 'delete'])->name('produk.delete');
Route::get('/produk/{produk_id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{produk_id}', [ProdukController::class, 'update'])->name('produk.update');

// Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index'); // Menampilkan daftar produk
// Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create'); // Menampilkan form tambah produk
// Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store'); // Menyimpan produk baru
// Route::get('/produk/{produk_id}/edit', [ProdukController::class, 'edit'])->name('produk.edit'); // Menampilkan form edit produk
// Route::put('/produk/{produk_id}', [ProdukController::class, 'update'])->name('produk.update'); // Memperbarui produk
// Route::get('/produk/{produk_id}', [ProdukController::class, 'delete'])->name('produk.delete'); // Menghapus produk


require __DIR__.'/auth.php';
