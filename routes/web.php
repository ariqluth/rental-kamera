<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('pengunjung.homepage');
});



Auth::routes();

// Login dan registered
// Route::post('/login', [LoginController::class, 'autentikasi']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// detail category camera
Route::get('/detail-category-DLSR', [App\Http\Controllers\CustomerController::class, 'categoryDSLR'])->name('categoryDLSR');

// detail category camera
Route::get('/detail-category-Mirrorless', [App\Http\Controllers\CustomerController::class, 'categoryMirrorless'])->name('categoryMirrorless');

// detail category camera
Route::get('/detail-category-ActionCamera', [App\Http\Controllers\CustomerController::class, 'categoryActionCamera'])->name('categoryActionCamera');

// detail category camera
Route::get('/detail-category-VideoSupport', [App\Http\Controllers\CustomerController::class, 'categoryVideoSupport'])->name('categoryVideoSupport');

// dashboard pemilik form
Route::get('/dashboard-detail', [App\Http\Controllers\PemilikController::class, 'dashboardDetail'])->name('dashboardDetail');



// dashboard pemilik dashboard

// dashboard pemilik
Route::get('/pemilik/home', [HomeController::class, 'hakAkses'])->name('pemilik')->middleware('hak_akses');
// dashboard alat group 
Route::get('/pemilik/alatdisewa', [PemilikController::class, 'alatdisewa'])->name('disewa');
Route::get('/pemilik/alatdisewa-tambah', [PemilikController::class, 'alatdisewaTambah'])->name('disewaTambah');
Route::get('/pemilik/alatdisewa-edit', [PemilikController::class, 'alatdisewaEdit'])->name('disewaEdit');
Route::get('/pemilik/alatdisewa-detail', [PemilikController::class, 'alatdisewaDetail'])->name('disewaDetail');
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





// contact dam about us

Route::get('/contact', [App\Http\Controllers\CustomerController::class, 'contact'])->name('contact');


Route::get('/about', [App\Http\Controllers\CustomerController::class, 'about'])->name('about');

// login hak hakAkses
