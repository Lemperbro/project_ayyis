<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\admin\AdminCabangController;
use App\Http\Controllers\admin\AdminConfirmController;
use App\Http\Controllers\admin\AdminRantingController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\cabang\DashboardCabangController;
use App\Http\Controllers\ranting\DashboardRantingController;

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

Route::get('/cek', function () {
    return view('data.view');
});



// Route::get('/coba', function () {
//     return view('admin.cabang.index');
// });

// Route::get('/add', function () {
//     return view('admin.konfirmasi.index');
// });

// Route::get('/baru', function () {
//     return view('cabang.dashboard.index');
// });


Route::middleware('guest')->group(function(){

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    
    
    });
    
Route::middleware('auth')->group(function(){
    Route::post('/logout', [LoginController::class, 'logout']);


});



Route::middleware('admin')->group(function(){
    Route::post('/admin/konfirmasi/{id}', [AdminConfirmController::class, 'confirm']);
    Route::get('/admin/konfirmasi', [AdminConfirmController::class, 'index']);

    Route::get('/admin', [AdminDashboardController::class, 'index']);
    Route::get('/admin/cabang', [AdminCabangController::class, 'index']);
    Route::get('/admin/cabang/add', [AdminCabangController::class, 'create']);
    Route::post('/admin/cabang/add', [AdminCabangController::class, 'store']);
    Route::post('/admin/cabang/delete/{id}', [AdminCabangController::class, 'destroy']);
    Route::get('/admin/ranting', [AdminRantingController::class, 'index']);
    Route::get('/admin/ranting/add', [AdminRantingController::class, 'create']);
    Route::post('/admin/ranting/add', [AdminRantingController::class, 'store']);
    Route::post('/admin/ranting/delete/{id}', [AdminRantingController::class, 'destroy']);
});

Route::middleware('cabang')->group(function(){
    Route::get('/cabang', [DashboardCabangController::class, 'index']);

});

Route::middleware('ranting')->group(function(){
    Route::get('/ranting', [DashboardRantingController::class, 'index']);
    Route::get('/ranting/add', [DashboardRantingController::class, 'create']);

});
