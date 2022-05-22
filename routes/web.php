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

# routing untuk halaman buyer Profile
Route::get('/buyers/profile', function () {
    return view('buyers.profile', [
        'title' => 'Kos Saya',
        'name' => 'Johnny Sins',
        'email' => 'mail@email.com',
        'optionName' => 'Kos Saya',
        'propertyName' => 'Kosan Brothel Gerlong Triple X',
        'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069',
        'propertyPrice' => 'Rp 1.000.000',
        'duration' => '21/06/2022 - 32/13/2069'
        
    ]);
});

# routing untuk halaman buyer History
Route::get('/buyers/history', function () {
    return view('buyers.history', [
        'title' => 'Riwayat Kos',
        'name' => 'Johnny Sins',
        'email' => 'mail@email.com',
        'optionName' => 'Riwayat Kos',
        'propertyName' => 'Kosan Brothel Gerlong Triple X',
        'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069',
        'propertyPrice' => 'Rp 1.000.000',
        'duration' => '21/06/2022 - 32/13/2069'
    ]);
});

# routing untuk halaman buyer Verification
Route::get('/buyers/verification', function () {
    return view('buyers.verification', [
        'title' => 'Verifikasi Akun',
        'name' => 'Johnny Sins',
        'email' => 'mail@email.com',
        'optionName' => 'Verifikasi Akun'
    ]);
});

# routing untuk halaman seller Profile
Route::get('sellers/profile', function () {
    return view('sellers.profile', [
        'title' => 'Daftar Property',
        'name' => 'Fukada Eimi',
        'email' => 'mail@email.com',
        'optionName' => 'Daftar Property',
        'propertyName' => 'Kosan Brothel Gerlong Triple X',
        'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069'
    ]);
});

# routing untuk halaman seller Profile
Route::get('/sellers/history', function () {
    return view('sellers.history', [
        'title' => 'Riwayat Transaksi',
        'name' => 'Fukada Eimi',
        'email' => 'mail@email.com',
        'optionName' => 'Riwayat Transaksi',
        'propertyName' => 'Kosan Brothel Gerlong Triple X',
        'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069'
    ]);
});