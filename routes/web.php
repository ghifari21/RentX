<?php

use App\Http\Controllers\DashboardBuyerController;
use App\Http\Controllers\DashboardSellerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// NEED TO FIX THESE ROUTES LATER
Route::get('/', [PageController::class, 'index']);

Route::get('/search', [PageController::class, 'search']);

Route::get('/property/{property:slug}', [PageController::class, 'show']);

# routing untuk halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

# routing untuk halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

# routing untuk halaman buyer Profile
// Route::get('/buyers/profile', function () {
//     return view('buyers.profile', [
//         'title' => 'Kos Saya',
//         'name' => 'Johnny Sins',
//         'email' => 'mail@email.com',
//         'optionName' => 'Kos Saya',
//         'propertyName' => 'Kosan Brothel Gerlong Triple X',
//         'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069',
//         'propertyPrice' => 'Rp 1.000.000',
//         'duration' => '21/06/2022 - 32/13/2069'

//     ]);
// });

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

Route::get('/dashboard', [DashboardBuyerController::class, 'index']);

# routing untuk review/comment
Route::post('/buyers/review',[ReviewController::class,'store'])->name('add.comment');

# routing untuk order
Route::post('/buyers/order/{property:slug}', [OrderController::class,'store']);


# routing untuk halaman Dashboard Seller
Route::get('/seller/dashboard', [DashboardSellerController::class, 'index'])->middleware('seller');

Route::get('/seller/dashboard/create', [DashboardSellerController::class, 'create'])->middleware('seller');

Route::post('/seller/dashboard', [DashboardSellerController::class, 'store'])->middleware('seller');

Route::get('/seller/dashboard/{property:slug}/edit', [DashboardSellerController::class, 'edit'])->middleware('seller');

Route::put('/seller/dashboard/{property:slug}', [DashboardSellerController::class, 'update'])->middleware('seller');

Route::delete('/seller/dashboard/{property:slug}', [DashboardSellerController::class, 'destroy'])->middleware('seller');

// Route::get('sellers/profile', function () {
//     return view('sellers.profile', [
//         'title' => 'Daftar Property',
//         'name' => 'Fukada Eimi',
//         'email' => 'mail@email.com',
//         'optionName' => 'Daftar Property',
//         'propertyName' => 'Kosan Brothel Gerlong Triple X',
//         'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069'
//     ]);
// });



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

Route::get('/admin', function () {
    return view('admin.dashboard', [
        'title' => 'Admin',
        'adminName' => 'Axel Eldrian'
    ]);
});

Route::get('/admin/daftarAdmin', function () {
    return view('admin.daftarAdmin', [
        'title' => 'Daftar Admin',
        'adminName' => 'Axel Eldrian'
    ]);
});

Route::get('/admin/daftarSeller', function () {
    return view('admin.daftarSeller', [
        'title' => 'Daftar Seller',
        'adminName' => 'Axel Eldrian'
    ]);
});

Route::get('/admin/daftarBuyer', function () {
    return view('admin.daftarBuyer', [
        'title' => 'Daftar Buyer',
        'adminName' => 'Axel Eldrian'
    ]);
});
