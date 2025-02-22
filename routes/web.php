<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AngsuranAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BuktiPembayaranController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\DataPengajuanController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LogAktivitasController;
use App\Http\Controllers\NotifikasiAdminController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\PinjmanAdminController;
use App\Http\Controllers\ProfilAdminController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ShareMassageController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\SimpananPokokAdminController;
use App\Http\Controllers\SimpananSukarelaAdminController;
use App\Http\Controllers\SimpananWajibAdminController;
use App\Http\Controllers\StatistikKeuanganController;
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

Route::middleware(['auth'])->group(function () {

    // Redirect user ke halaman yang sesuai berdasarkan role
    Route::get('/home', function () {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('min');
        }
        return redirect()->route('user');
    });

    // Grup Route untuk Admin (userAkses:admin)
    Route::middleware(['userAkses:admin'])->group(function () {
        Route::get('/adminDashboard', [DashboardAdminController::class, 'dashboard'])->name('min');
        Route::get('/Profil', [ProfilAdminController::class, 'profiladmin'])->name('profiladmin');
        Route::put('/profil/edit', [ProfilAdminController::class, 'update'])->name('profil.update');
        Route::get('/Data-Anggota', [DataAnggotaController::class, 'dataanggota'])->name('dataanggota');
        Route::delete('/Data-Anggota/{id}', [DataAnggotaController::class, 'destroy'])->name('users.destroy');
        Route::post('/Data-Anggota/update-role', [DataAnggotaController::class, 'updateRole'])->name('users.updateRole');
        Route::get('/admin/user-summary/{id}', [DataAnggotaController::class, 'getUserSummary']);
        Route::post('/Data-Anggota/store', [DataAnggotaController::class, 'store'])->name('users.store');
        Route::get('/Simpanan-Pokok', [SimpananPokokAdminController::class, 'simpananpokokadmin'])->name('simpananpokokadmin');
        Route::get('/Simpanan-Wajib', [SimpananWajibAdminController::class, 'simpananwajibadmin'])->name('simpananwajibadmin');
        Route::get('/Simpanan-Sukarela', [SimpananSukarelaAdminController::class, 'simpanansukarelaadmin'])->name('simpanansukarelaadmin');
        Route::get('/Pinjaman', [PinjmanAdminController::class, 'pinjamanadmin'])->name('pinjamanadmin');
        Route::get('/Angsuran', [AngsuranAdminController::class, 'angsuran'])->name('angsuran');
        Route::get('/Denda', [DendaController::class, 'denda'])->name('denda');
        Route::get('/admin/bukti/{bukti}', [BuktiPembayaranController::class, 'showAdmin'])->name('admin.bukti.pembayaran');
        Route::get('/Data-Pengajuan', [DataPengajuanController::class, 'pangajuan'])->name('pangajuan');
        Route::post('/data-pengajuan/{id}/update', [DataPengajuanController::class, 'update']);
        Route::get('/Statistik-Keuangan', [StatistikKeuanganController::class, 'statistikkeuangan'])->name('statistikkeuangan');
        Route::get('/Backup', [BackupController::class, 'backup'])->name('backup');
        Route::get('/Log-Aktivitas', [LogAktivitasController::class, 'logaktivitas'])->name('logaktivitas');
        Route::get('/kelola-pesan', [ShareMassageController::class, 'sharemassage'])->name('admin.sharemassage');
        Route::post('/kelola-pesan', [ShareMassageController::class, 'store'])->name('admin.sharemassage.store');
        Route::delete('/kelola-pesan/{id}', [ShareMassageController::class, 'destroy'])->name('admin.sharemassage.destroy');
        Route::get('/Notifikasi', [NotifikasiAdminController::class, 'notifikasiadmin'])->name('notifikasiadmin');
        Route::patch('/admin/notifikasi/{id}/dibalas', [NotifikasiAdminController::class, 'tandaiSudahDibalas'])->name('notifikasi.tandaiSudahDibalas');
        Route::get('/Laporan', [LaporanController::class, 'laporan'])->name('laporan');
    });

    // Grup Route untuk User (userAkses:user)
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
        Route::post('/user/kirim-pesan', [BantuanController::class, 'kirimPesan'])->name('user.kirim-pesan');
    });

    // Route logout tetap di luar grup agar bisa digunakan oleh siapa saja yang sudah login
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route fallback untuk menangani 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});