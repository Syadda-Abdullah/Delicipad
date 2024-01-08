<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/adminlogin', [AdminController::class, 'showAdminLoginForm']);
Route::post('/adminlogin', [AdminController::class, 'adminlogin']);

Route::get('/admin', function () {
    return view('pages/admin');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/menu', [MenuController::class,'index']);

Route::get('/cart', [TransaksiController::class,'index'])->name('cart');

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
// Route::post('/simpanalamat',[TransaksiController::class,'simpan_alamat'])->name('cart');
Route::post('/simpanpembayaran',[TransaksiController::class,'simpanpembayaran']);
Route::post('/hapus',[TransaksiController::class,'hapus']);

// Route::put('/update-transaksi/{id}', 'TransaksiController@update')->name('update.transaksi');

// Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');