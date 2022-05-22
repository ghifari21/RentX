<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

# routing untuk halaman login
Route::get('/login', function () {
    return view('login');
});

# routing untuk halaman register
Route::get('/register', function () {
    return view('register');
});

# routing untuk halaman buyerProfile
Route::get('/buyerProfile', function () {
    return view('buyerProfile');
});

# routing untuk halaman buyerHistory
Route::get('/buyerHistory', function () {
    return view('buyerHistory');
});

# routing untuk halaman buyerVerification
Route::get('/buyerVerification', function () {
    return view('buyerVerification');
});

# routing untuk halaman sellerProfile
Route::get('/sellerProfile', function () {
    return view('sellerProfile');
});

# routing untuk halaman sellerProfile
Route::get('/sellerHistory', function () {
    return view('sellerHistory');
});