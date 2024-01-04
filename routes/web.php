<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('/pages/login');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/coba2', function () {
    return view('coba2');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/delivery', function () {
    return view('delivery');
});