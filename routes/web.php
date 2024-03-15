<?php

use GuzzleHttp\Middleware;
use App\Console\Commands\DbBackup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Middleware\CabangMiddleware;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\ExportExcelController;
use App\Http\Controllers\auth\ProfileController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\cabang\CabangController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\admin\AdminCabangController;
use App\Http\Controllers\admin\AdminAnggotaController;
use App\Http\Controllers\admin\AdminConfirmController;
use App\Http\Controllers\admin\AdminRantingController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\admin\AdminDashboardController;
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




Route::middleware('guest')->group(function () {



    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/registers', [RegisterController::class, 'coba']);

    Route::get('/lupa-password', [ResetPasswordController::class, 'index'])->name('lupaPassword');
    Route::post('/lupa-password', [ResetPasswordController::class, 'store'])->name('lupaPassword.post');
    Route::get('/reset-password/{token}/{email}', [ResetPasswordController::class, 'reset'])->name('resetPassword');
    Route::post('/reset-password', [ResetPasswordController::class, 'update'])->name('resetPassword.update');
});

Route::middleware('auth')->group(function () {
    Route::post('/anggota/delete/{id}', [AdminAnggotaController::class, 'delete']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/edit-profile', [ProfileController::class, 'index']);
    Route::post('/edit-profile/{id}', [ProfileController::class, 'update']);
    Route::get('/edit-anggota/{id}', [AnggotaController::class, 'editAnggota'])->name('anggota.edit');
    Route::post('/update-anggota/{id}', [AnggotaController::class, 'updateAnggota']);
});



Route::middleware('admin')->group(function () {
    Route::post('/admin/konfirmasi/{id}', [AdminConfirmController::class, 'confirm']);
    Route::post('/admin/tolak/{id}', [AdminConfirmController::class, 'tolak']);
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

    Route::get('/admin/anggota', [AdminAnggotaController::class, 'index']);
});

Route::middleware('cabang')->group(function () {
    Route::get('/cabang', [CabangController::class, 'index']);
    Route::get('/cabang/ranting', [CabangController::class, 'ranting']);
    Route::get('/cabang/ranting/create', [CabangController::class, 'ranting_create']);
    Route::post('/cabang/ranting/create', [CabangController::class, 'ranting_store']);
    Route::get('/cabang/anggota', [CabangController::class, 'anggota']);
    Route::get('/cabang/confirmation', [CabangController::class, 'confirmation']);
    Route::post('/cabang/{tipe}/{id}', [CabangController::class, 'confirmation_Action']);
});

Route::get('/ranting/anggota', [DashboardRantingController::class, 'anggota']);
Route::middleware('ranting')->group(function () {
    Route::get('/ranting', [DashboardRantingController::class, 'index']);
    Route::get('/ranting/add', [DashboardRantingController::class, 'create']);
    Route::post('/ranting/add', [DashboardRantingController::class, 'store']);
    Route::post('/ranting/delete/{id}', [DashboardRantingController::class, 'delete']);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/a', [HomeController::class, 'indexs']);
Route::get('/download', [ExportExcelController::class, 'Export']);

Route::get('/backup', function () {
    // Jalankan perintah backup menggunakan Artisan
    Artisan::call('backup:run');

    // Dapatkan output dari perintah backup
    $output = Artisan::output();

    // Nama file backup
    $filename = 'backup2.sql';

    // Simpan output backup ke file sementara
    Storage::put('temporary_backup/' . $filename, $output);

    // Set header untuk memicu unduhan file
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Baca file dan kirimkan ke output HTTP
    readfile(Storage::path('temporary_backup/' . $filename));

    // Hapus file backup sementara setelah dikirim
    Storage::delete('temporary_backup/' . $filename);
});
