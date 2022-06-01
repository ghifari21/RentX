<?php

use App\Http\Controllers\DashboardAdminController;
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

# routing untuk nampilin property secara umum
Route::get('/search', [PageController::class, 'search']);

#routing untuk detail property
Route::get('/property/{property:slug}', [PageController::class, 'show']);

# routing untuk halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

# routing untuk halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/payment/{order:id}', [OrderController::class, 'payment']);

Route::put('/payment/{order:id}', [OrderController::class, 'paymentAccepted']);

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

//BUYER
#routing landing page/dashboard buyer
Route::get('/dashboard', [DashboardBuyerController::class, 'index']);

Route::get('/dashboard/{user:username}/edit', [DashboardBuyerController::class, 'edit']);

Route::put('/dashboard/{user:username}', [DashboardBuyerController::class, 'update']);

Route::get('/dashboard/change-password', [DashboardBuyerController::class, 'viewChangePassword']);

Route::put('/dashboard/change-password/{user:username}', [DashboardBuyerController::class, 'changePassword']);

Route::get('/dashboard/become-seller', [DashboardBuyerController::class, 'becomeSeller']);

Route::post('/dashboard/become-seller', [DashboardBuyerController::class, 'requestToAdmin']);

# routing untuk halaman buyer Riview/Komentar
Route::get('/buyers/review/{property:slug}',[ReviewController::class,'index']);#untuk di halaman detail property
Route::get('/buyers/review/dashboard/{order:id}',[ReviewController::class,'indexForDashboardBuyer']);#untuk di halaman dashboard buyer

Route::get('/buyers/review/dashboard/{order:id}');#lihat review
Route::post('/buyers/review/{property:slug}',[ReviewController::class,'store']);
Route::put('/buyers/review/{id}',[ReviewController::class,'update']);

# routing untuk order
Route::post('/buyers/order/{property:slug}', [OrderController::class,'store']);

// SELLER
# routing untuk halaman Dashboard Seller
Route::get('/seller/dashboard', [DashboardSellerController::class, 'index'])->middleware('seller');

Route::post('/seller/dashboard', [DashboardSellerController::class, 'store'])->middleware('seller');

Route::get('/seller/dashboard/{property:slug}/edit', [DashboardSellerController::class, 'edit'])->middleware('seller');

Route::get('/seller/dashboard/profile/{user:username}/edit', [DashboardSellerController::class, 'editProfile'])->middleware('seller');

Route::put('/seller/dashboard/profile/{user:username}', [DashboardSellerController::class, 'updateProfile'])->middleware('seller');

Route::get('/seller/dashboard/create', [DashboardSellerController::class, 'create'])->middleware('seller');

Route::put('/seller/dashboard/{property:slug}', [DashboardSellerController::class, 'update'])->middleware('seller');

Route::delete('/seller/dashboard/{property:slug}', [DashboardSellerController::class, 'destroy'])->middleware('seller');

Route::get('/seller/dashboard/history', [DashboardSellerController::class, 'history'])->middleware('seller');

Route::get('/seller/dashboard/change-password', [DashboardSellerController::class, 'viewChangePassword'])->middleware('seller');

Route::put('/seller/dashboard/change-password/{user:username}', [DashboardSellerController::class, 'changePassword'])->middleware('seller');

#seller order action
Route::post('/seller/orders/{order:id}', [DashboardSellerController::class, 'orderAction'])->middleware('seller');

# permintaan sewa
Route::get('/seller/orders',[DashboardSellerController::class, 'showOrder'])->middleware('seller');

# riwayat transaksi

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

Route::get('/admin/requestUpgrade', [DashboardAdminController::class, 'requestUpgrade']);

Route::get('/admin/requestUpgrade/{user:username}', [DashboardAdminController::class, 'showRequest']);

Route::put('/admin/requestUpgrade/{user:username}', [DashboardAdminController::class, 'acceptRequest']);

Route::delete('/admin/requestUpgrade/{user:username}', [DashboardAdminController::class, 'rejectRequest']);
