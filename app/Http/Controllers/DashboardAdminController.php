<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;

class DashboardAdminController extends Controller
{
    public function dashboard()
    {
        // Menghitung jumlah anggota yang terdaftar
        $jumlahAnggota = User::count();

        // Menghitung jumlah transaksi simpanan wajib dan sukarela
        $jumlahSimpananWajib = Simpanan::where('jenis', 'wajib')->count();
        $jumlahSimpananSukarela = Simpanan::where('jenis', 'sukarela')->count();

        // Menghitung jumlah pinjaman yang diajukan
        $jumlahPinjaman = Pinjaman::count();

        // Menghitung jumlah total angsuran yang telah dilakukan
        $jumlahAngsuran = RiwayatPembayaran::count();

        // Menghitung jumlah pengajuan dengan status 'Dalam Proses'
        $jumlahPengajuan = Pinjaman::where('status', 'Dalam Proses')->count();

        // Menghitung total nominal simpanan wajib dan sukarela
        $totalSimpananWajib = Simpanan::where('jenis', 'wajib')->sum('jumlah');
        $totalSimpananSukarela = Simpanan::where('jenis', 'sukarela')->sum('jumlah');

        // Menghitung total pinjaman yang diajukan
        $totalPinjaman = Pinjaman::sum('jumlah_pinjaman');

        // Menghitung total angsuran yang telah dibayarkan
        $totalAngsuran = RiwayatPembayaran::sum('jumlah_pembayaran');

        // Menghitung total nominal pinjaman yang masih dalam status 'Dalam Proses'
        $totalPengajuan = Pinjaman::where('status', 'Dalam Proses')->sum('jumlah_pinjaman');

        // Menghitung total denda keseluruhan
        $totalDenda = Pinjaman::whereNotNull('total_denda')->sum('total_denda');

        // Menghitung jumlah anggota yang memiliki denda
        $jumlahAnggotaDenda = Pinjaman::whereNotNull('total_denda')
            ->where('total_denda', '>', 0)
            ->distinct('user_id')
            ->count('user_id');

        return view('admin.dashboard-admin', compact(
            'jumlahAnggota',
            'jumlahSimpananWajib',
            'jumlahSimpananSukarela',
            'jumlahPinjaman',
            'jumlahAngsuran',
            'jumlahPengajuan',
            'totalSimpananWajib',
            'totalSimpananSukarela',
            'totalPinjaman',
            'totalAngsuran',
            'totalPengajuan',
            'totalDenda',
            'jumlahAnggotaDenda'
        ));
    }
}
