<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;

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
Route::post('/login', [LoginController::class, 'autentikasi']);



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


// contact dam about us

Route::get('/contact', [App\Http\Controllers\CustomerController::class, 'contact'])->name('contact');


Route::get('/about', [App\Http\Controllers\CustomerController::class, 'about'])->name('about');