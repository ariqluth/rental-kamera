<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\TesterController;
use App\Http\Controllers\Auth\PengambilanController;
use App\Http\Controllers\Payment\TripayCallbackController;



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
    return view('home');
});



Auth::routes();

// Login dan registered
// Route::post('/login', [LoginController::class, 'autentikasi']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/alat/{alat}', [App\Http\Controllers\HomeController::class,'detail'])->name('home.show');
// Route::post('transaksi/product', [HomeController::class, 'store'])->name('transaksi.store');
// detail category camera
Route::get('/detail-category-DLSR', [App\Http\Controllers\CustomerController::class, 'categoryDSLR'])->name('categoryDLSR');

// detail category camera
Route::get('/detail-category-Mirrorless', [App\Http\Controllers\CustomerController::class, 'categoryMirrorless'])->name('categoryMirrorless');

// detail category camera
Route::get('/detail-category-ActionCamera', [App\Http\Controllers\CustomerController::class, 'categoryActionCamera'])->name('categoryActionCamera');

// detail category camera
Route::get('/detail-category-VideoSupport', [App\Http\Controllers\CustomerController::class, 'categoryVideoSupport'])->name('categoryVideoSupport');

// 


// dashboard pemilik form
Route::get('/dashboard-detail', [App\Http\Controllers\PemilikController::class, 'dashboardDetail'])->name('dashboardDetail');



// dashboard pemilik dashboard

// dashboard pemilik
Route::get('/pemilik/home', [HomeController::class, 'hakAkses'])->name('pemilik')->middleware('hak_akses');
// dashboard alat group 
Route::resource('/pemilik/alat', '\App\Http\Controllers\AlatController');



Route::resource('/pemilik/kondisi-kamera', KondisiAlatController::class);
// 
Route::get('/pemilik/kelolaPelanggan', [PemilikController::class, 'dataPelanggan'])->name('dataPelanggan');
// 
Route::get('/pemilik/laporan', [PemilikController::class, 'datalaporan'])->name('dataLaporan');

Route::get('/pemilik/profile', [PemilikController::class, 'profilePemilik'])->name('profilpemilik');

// dasboard admin 
Route::get('/admin/home', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/kelolaPelanggan', [AdminController::class, 'dataPelanggan'])->name('datacustomer');
// 
Route::get('admin/laporan', [AdminController::class, 'datalaporan'])->name('datalapor');



// Customer 
Route::get('/customer/home', [CustomerController::class, 'homepage'])->name('homecustomer');
Route::get('/alat/{alat}', [App\Http\Controllers\CustomerController::class,'detail'])->name('customer.product');
Route::resource('/customer/profile', '\App\Http\Controllers\CustomerController');
Route::get('/detail/{alat}', [App\Http\Controllers\CustomerController::class,'pembayaran'])->name('detail.checkout');
Route::post('/transaksi', [App\Http\Controllers\CustomerController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{reference}', [App\Http\Controllers\CustomerController::class,'transaksidetail'])->name('transaksi.detail');



Route::get('/customer/dashboard', [CustomerController::class, 'dashboardDetail'])->name('dashboardDetail');
Route::get('/customer/profile', [CustomerController::class, 'profile'])->name('profile');
Route::get('/customer/transaksi', [CustomerController::class, 'dashboardTransaksi'])->name('disewaDetail');

// Route::get('/customer/pengambilan', [CustomerController::class, 'dashboardPengambilan'])->name('pengambilan');
// Route::get('/customer/pengembalian/tambahakan', [CustomerController::class, 'dashboardPengambilanTambah'])->name('pengambilantambah');
// Route::post('/customer/pengembalian/tambahkan/{tambahkan}', [CustomerController::class, 'dashboardPengambilanStore'])->name('pengambilanstore');
Route::resource('/pengambilan', '\App\Http\Controllers\PengambilanController');
Route::resource('/pengembalian', '\App\Http\Controllers\PengembilanController');
// Route::get('/customer/pengembilan', [CustomerController::class, 'dashboardPengembilan'])->name('pengembilan');

Route::post('callback',[TripayCallbackController::class, 'handle']);


// contact dam about us

Route::get('/contact', [App\Http\Controllers\CustomerController::class, 'contact'])->name('contact');


Route::get('/about', [App\Http\Controllers\CustomerController::class, 'about'])->name('about');


Route::get('/detailproduct', [CustomerController::class, 'detailProduct'])->name('detailProduct');

Route::get('/detail-invoce', [PembayaranController::class, 'checkout'])->name('checkout');

// transaksi tripay data
// Route::post('transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');

// tester crude
Route::resource('/tester', '\App\Http\Controllers\TesterController');