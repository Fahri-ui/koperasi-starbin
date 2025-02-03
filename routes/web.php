<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BuktiPembayaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotifikasiController;
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
Route::middleware(['guest'])->group(function(){
    Route::view('/', 'welcome');

    Route::get('/Login',[AuthController::class,'index'])->name('login');
    Route::post('/Login',[AuthController::class,'login']);

    Route::get('/Registrasi',[AuthController::class,'create'])->name('registrasi');
    Route::post('/Registrasi',[AuthController::class,'register']);
});

Route::middleware(['auth'])->group(function () {

    // ketika user mencoba mengaskses landing tanpa log out
    Route::redirect('/home', '/user'); 

    // Route untuk admin (dengan middleware userAkses:admin)
    Route::middleware(['userAkses:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin'); 
        Route::get('/usercontroll', [DashboardController::class, 'dashboard'])->name('usercontrol');    
    });

    // Grup Route untuk userakses
    Route::middleware(['userAkses:user'])->group(function () {
        Route::get('/user', [DashboardController::class, 'dashboard'])->name('user');
        Route::get('/userprofil', [ProfilController::class, 'profil'])->name('profil');
        Route::put('/userprofil', [ProfilController::class, 'update']);
        Route::get('/usersimpananwajib', [SimpananController::class, 'simpananwajib'])->name('simpananwajib');
        Route::get('/usersimpanansukarela', [SimpananController::class, 'simpanansukarela'])->name('simpanansukarela');
        Route::post('/simpanans', [SimpananController::class, 'store'])->name('simpanan.store');
        Route::get('/pinjaman', [PinjamanController::class, 'pinjaman'])->name('pinjaman');
        Route::post('/pinjaman/ajukan', [PinjamanController::class, 'ajukanPinjaman'])->name('pinjaman.ajukan');
        Route::post('/pinjaman/bayar', [PinjamanController::class, 'bayarPinjaman'])->name('pinjaman.bayar');   
        Route::get('/bukti/{bukti}', [BuktiPembayaranController::class, 'show'])->name('bukti.pembayaran');
        Route::get('/notifikasi', [NotifikasiController::class, 'notifikasi'])->name('notifikasi');
        Route::get('/bantuan', [BantuanController::class, 'bantuan'])->name('bantuan');
    });

    // Route logout tetap di luar grup agar bisa digunakan siapa saja yang sudah login
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
