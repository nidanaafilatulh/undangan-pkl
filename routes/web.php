<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AffiliateController;
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
//route login
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/register', [AuthController::class, 'process']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// // route dashboard
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');


//route barang
Route::resource('/barang', BarangController::class)->middleware('auth');


//route admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('users')->middleware('auth');
Route::get('/admin/undangan', [AdminController::class, 'showUndangan'])->name('showUndangan')->middleware('auth');
Route::get('/admin/pemasukan', [AdminController::class, 'showPemasukan'])->name('admin.pemasukan')->middleware('auth');
Route::get('/admin/tema', [AdminController::class, 'showTema'])->name('admin.tema')->middleware('auth');
Route::get('/admin/paket', [AdminController::class, 'showPaket'])->name('admin.paket')->middleware('auth');
Route::get('/admin/transaksi', [AdminController::class, 'showTransaksi'])->name('admin.transaksi')->middleware('auth');
Route::get('/admin/komisi', [AdminController::class, 'showKomisi'])->name('admin.komisi')->middleware('auth');

//route customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer')->middleware('auth');

//route affiliate
Route::get('/affiliate', [AffiliateController::class, 'index'])->name('affiliate')->middleware('auth');
Route::get('/affiliate/riwayatKomisi', [AffiliateController::class, 'showRiwayatKomisi'])->name('affiliate.riwayatKomisi')->middleware('auth');
Route::get('/affiliate/customer', [AffiliateController::class, 'showCustomerAffiliate'])->name('affiliate.customer')->middleware('auth');
Route::get('/affiliate/referral', [AffiliateController::class, 'createReferral'])->name('affiliate.referral')->middleware('auth');
