<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\UserControlController;
use App\Http\Controllers\UserController;
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

// menambahkan pengahalang menggunakan midleware guest agar page dashboard admin/user tidak bisa di akses tanpa login/register
Route::middleware(['guest'])->group(function () {
    Route::view('/', 'welcome');

    Route::get('/Login', [AuthController::class, 'index'])->name('login');
    Route::post('/Login', [AuthController::class, 'login']);

    Route::get('/Registrasi', [AuthController::class, 'create'])->name('registrasi');
    Route::post('/Registrasi', [AuthController::class, 'register']);
});

// midleware auth agar yang bisa mengakses route ini adalah user yang sudah login/register
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin');
        }
        return redirect()->route('user');
    });
    Route::middleware(['userAkses:admin'])->group(function () {
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/backup', [BackupController::class, 'backup'])->name('backup');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
        Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
    });

    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user'); // untuk mencegah user mengakses page admin
    Route::get('/userProfil', [UserController::class, 'profil'])->name('profil');
    Route::get('/userPinjaman', [UserController::class, 'pinjaman'])->name('pinjaman');
    Route::get('/userSimpanan', [UserController::class, 'simpanan'])->name('simpanan');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
