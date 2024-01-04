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
    return view('pages/home');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/menu', function () {
    return view('pages/menu');
});
Route::get('/cart', function () {
    return view('pages/cart');
});
Route::get('/payment', function () {
    return view('pages/payment');
});
Route::get('/delivery', function () {
    return view('pages/delivery');
});
Route::get('/admin', function () {
    return view('pages/admin');
});