<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CabangController;
use App\Http\Controllers\admin\RantingController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use GuzzleHttp\Middleware;
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
    return view('welcome');
});



Route::get('/coba', function () {
    return view('auth.register');
});


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

    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/konfirmasi', [AdminController::class, 'konfirmasi']);
});

Route::middleware('cabang')->group(function(){
    Route::get('/cabang', [CabangController::class, 'index']);

});

Route::middleware('ranting')->group(function(){
    Route::get('/ranting', [RantingController::class, 'index']);
    Route::get('/admin/ranting', [RantingController::class, 'create']);

});
