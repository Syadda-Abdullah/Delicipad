<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
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
    return view('pages/home');
});
Route::get('/admin', function () {
    return view('pages/admin');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/menu', [MenuController::class,'index']);

Route::get('/cart', [TransaksiController::class,'index']);

Route::get('/payment', function () {
    return view('pages/delivery2');
});
Route::get('/delivery', function () {
    return view('pages/delivery');
});
Route::get('/delivery2', function () {
    return view('pages/delivery2');
});
Route::get('/profile', function () {
    return view('pages/profile');
});
Route::post('/pesan',[TransaksiController::class,'pesan']);
Route::post('/simpanalamat',[TransaksiController::class,'simpan_alamat']);

// Route::put('/update-transaksi/{id}', 'TransaksiController@update')->name('update.transaksi');

// Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');