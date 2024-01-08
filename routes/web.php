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

Route::get('/menu', [MenuController::class,'index'])->name('menu');

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
Route::get('/update_transaksi', function () {
    return view('pages/update_transaksi');
});
Route::get('/profile', function () {
    return view('pages/profile');
});
Route::get('/create', function () {
    return view('pages/create');
});
Route::get('/crud_adm', [MenuController::class,'crud'])->name('crud_adm');
Route::get('/crud_transaksi', [TransaksiController::class,'crud'])->name('crud_transaksi');

Route::post('/updatedata', [TransaksiController::class,'update_data']);
// Route::post('/admin/posts', 'Admin\PostController@store')->name('admin.posts.store');

Route::post('/pesan',[TransaksiController::class,'pesan']);
Route::post('/simpanalamat',[TransaksiController::class,'simpan_alamat']);
// Route::post('/simpanalamat',[TransaksiController::class,'simpan_alamat'])->name('cart');
Route::post('/simpanpembayaran',[TransaksiController::class,'simpanpembayaran']);
Route::post('/hapus',[TransaksiController::class,'hapus']);
Route::post('/simpan_data',[MenuController::class,'store']);
Route::post('/hapus_menu', [MenuController::class, 'hapus_menu']);

// Route::put('/update-transaksi/{id}', 'TransaksiController@update')->name('update.transaksi');

// Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');