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
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LogAktivitasController;
use App\Http\Controllers\NotifikasiAdminController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PengajuanSimmpanansController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\PinjmanAdminController;
use App\Http\Controllers\ProfilAdminController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ShareMassageController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\SimpananPokokAdminController;
use App\Http\Controllers\SimpananSukarelaAdminController;
use App\Http\Controllers\SimpananWajibAdminController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\StatistikKeuanganController;
use App\Http\Controllers\UserControlController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifikasiPembayaranPinjamanController;
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

// Midlleware Guest Untuk Pengunjung
Route::middleware(['guest'])->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landing');

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
        // Dashboard
        Route::get('/adminDashboard', [DashboardAdminController::class, 'dashboard'])->name('min');
        // Profil
        Route::get('/Profil', [ProfilAdminController::class, 'profiladmin'])->name('profiladmin');
        Route::put('/profil/edit', [ProfilAdminController::class, 'update'])->name('profil.update');
        // Data Anggota
        Route::get('/Data-Anggota', [DataAnggotaController::class, 'dataanggota'])->name('dataanggota');
        Route::delete('/Data-Anggota/{id}', [DataAnggotaController::class, 'destroy'])->name('users.destroy');
        Route::post('/Data-Anggota/update-role', [DataAnggotaController::class, 'updateRole'])->name('users.updateRole');
        Route::get('/admin/user-summary/{id}', [DataAnggotaController::class, 'getUserSummary']);
        Route::post('/Data-Anggota/store', [DataAnggotaController::class, 'store'])->name('users.store');
        // Simpanan Wajib
        Route::get('/Simpanan-Wajib', [SimpananWajibAdminController::class, 'simpananwajibadmin'])->name('simpananwajibadmin');
        // Simpanan Sukarela
        Route::get('/Simpanan-Sukarela', [SimpananSukarelaAdminController::class, 'simpanansukarelaadmin'])->name('simpanansukarelaadmin');
        // pinjaman
        Route::get('/Pinjaman', [PinjmanAdminController::class, 'pinjamanadmin'])->name('pinjamanadmin');
        // Angsuran
        Route::get('/Angsuran', [AngsuranAdminController::class, 'index'])->name('angsuran');
        Route::post('/approve/{id}', [AngsuranAdminController::class, 'approve'])->name('admin.setujui.angsuran');
        Route::post('/reject/{id}', [AngsuranAdminController::class, 'reject'])->name('admin.tolak.angsuran');        
        // Denda
        Route::get('/Denda', [DendaController::class, 'denda'])->name('denda');
        // Data Pengajuan Pinjaman
        Route::get('/Data-Pengajuan-Pinjaman', [DataPengajuanController::class, 'pangajuan'])->name('pangajuan');
        Route::post('/data-pengajuan/{id}/update', [DataPengajuanController::class, 'update']);
        // Data Pengajuan Simpanans
        Route::get('/Data-Pengajuan-Simpanans', [PengajuanSimmpanansController::class, 'simpanans'])->name('simpanans');
        Route::post('/update-status-simpanan/{id}', [PengajuanSimmpanansController::class, 'updateStatus'])->name('updateStatusSimpanan');
        // Statistik Keuangan
        Route::get('/Statistik-Keuangan', [StatistikKeuanganController::class, 'statistikkeuangan'])->name('statistikkeuangan');
        // Kelola Pesan 
        Route::get('/kelola-pesan', [ShareMassageController::class, 'sharemassage'])->name('admin.sharemassage');
        Route::post('/kelola-pesan', [ShareMassageController::class, 'store'])->name('admin.sharemassage.store');
        Route::delete('/kelola-pesan/{id}', [ShareMassageController::class, 'destroy'])->name('admin.sharemassage.destroy');
        // Notifikasi
        Route::get('/Notifikasi', [NotifikasiAdminController::class, 'notifikasiadmin'])->name('notifikasiadmin');
        Route::patch('/admin/notifikasi/{id}/dibalas', [NotifikasiAdminController::class, 'tandaiSudahDibalas'])->name('notifikasi.tandaiSudahDibalas');
        // Laporan
        Route::get('/Laporan', [LaporanController::class, 'laporan'])->name('laporan');
        // Social Media
        Route::get('/Sosial Media', [SocialMediaController::class, 'index'])->name('sosmed');
        Route::post('/admin/social-links/store', [SocialMediaController::class, 'store'])->name('admin.social-links.store');
        Route::put('/admin/social-links/update/{id}', [SocialMediaController::class, 'update'])->name('admin.social-links.update');
        Route::delete('/admin/social-links/delete/{id}', [SocialMediaController::class, 'destroy'])->name('admin.social-links.delete');
        // Bukti Pembayaram
        Route::get('/admin/bukti/{bukti}', [BuktiPembayaranController::class, 'showAdmin'])->name('admin.bukti.pembayaran');
    });

    // Grup Route untuk User (userAkses:user)
    Route::middleware(['userAkses:user'])->group(function () {
        // Dashboard
        Route::get('/user', [DashboardController::class, 'dashboard'])->name('user');
        // Profil
        Route::get('/userprofil', [ProfilController::class, 'profil'])->name('profil');
        Route::put('/userprofil', [ProfilController::class, 'update']);
        // Simpanans
        Route::post('/simpanan/bayar', [SimpananController::class, 'storePayment'])->name('simpanan.bayar');
        Route::post('/simpanans', [SimpananController::class, 'store'])->name('simpanan.store');
        // wajib
        Route::get('/usersimpananwajib', [SimpananController::class, 'simpananwajib'])->name('simpananwajib');
        // Sukarela
        Route::get('/usersimpanansukarela', [SimpananController::class, 'simpanansukarela'])->name('simpanansukarela');
        // Pinjaman
        Route::get('/pinjaman', [PinjamanController::class, 'pinjaman'])->name('pinjaman');
        Route::post('/pinjaman/ajukan', [PinjamanController::class, 'ajukanPinjaman'])->name('pinjaman.ajukan');
        Route::post('/pinjaman/bayar', [PinjamanController::class, 'bayarPinjaman'])->name('pinjaman.bayar');
        Route::get('/bukti/{bukti}', [BuktiPembayaranController::class, 'show'])->name('bukti.pembayaran');
        // Notifikasi
        Route::get('/notifikasi', [NotifikasiController::class, 'notifikasi'])->name('notifikasi');
        // Bantuan
        Route::get('/bantuan', [BantuanController::class, 'bantuan'])->name('bantuan');
        Route::post('/user/kirim-pesan', [BantuanController::class, 'kirimPesan'])->name('user.kirim-pesan');
    });

    // Route logout luar grup agar bisa digunakan oleh siapa saja yang sudah login
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route fallback untuk menangani 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
