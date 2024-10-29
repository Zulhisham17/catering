<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// merchant
Route::get('/merchant', function () {
    return view('merchant.index');
})->name('merchant');

Route::get('/merchant/kategori', function () {
    return view('merchant.kategori');
});
// Route::get('/merchant/barang', function () {
//     return view('merchant.barang');
// });
Route::resource('/merchant/barang/', BarangController::class);
Route::resource('/merchant/pesanan/', PesananController::class);
