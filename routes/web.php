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
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/menu', [MenuController::class,'index']);

Route::get('/coba', function () {
    return view('coba');
});
Route::get('/cart', [TransaksiController::class,'index']);

Route::get('/coba2', function () {
    return view('coba2');
});
Route::get('/payment', function () {
    return view('pages/payment');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/home', function () {
    return view('home');
});