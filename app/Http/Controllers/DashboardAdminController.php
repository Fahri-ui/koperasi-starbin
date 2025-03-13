<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function dashboard()
    {
        // Menghitung jumlah anggota yang terdaftar
        $jumlahAnggota = User::where('role', 'user')->count();

        // Menghitung jumlah transaksi simpanan wajib dan sukarela
        $jumlahSimpananWajib = Simpanan::where('jenis', 'wajib')->count();
        $jumlahSimpananSukarela = Simpanan::where('jenis', 'sukarela')->count();

        // Menghitung jumlah pinjaman yang diajukan
        $jumlahPinjaman = Pinjaman::count();

        // Menghitung jumlah total angsuran yang telah dilakukan
        $jumlahAngsuran = RiwayatPembayaran::count();

        // Menghitung jumlah pengajuan dengan status 'Dalam Proses'
        $jumlahPengajuan = Pinjaman::where('status', 'Dalam Proses')->count();
 
        // Hitung saldo dari simpaan sukarela
        $totalSimpananSukarela = Simpanan::where('jenis', 'sukarela')
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->sum('jumlah');
            
        // Menghitung total saldo simpanan wajib 
        $totalSimpananWajib = Simpanan::where('jenis', 'wajib')
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->sum('jumlah');
            
        $totalSimpananAnggota = Simpanan::where('jenis', 'anggota') 
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->sum('jumlah');
            
        // Menghitung total pinjaman yang diajukan
        $totalPinjaman =  Pinjaman::whereIn('status', ['Aktif', 'Lunas'])->sum('jumlah_pinjaman');

        // Menghitung total angsuran yang telah dibayarkan
        $totalAngsuran = RiwayatPembayaran::where('status', 'Berhasil')->sum('jumlah_Pembayaran');

        // Menghitung total nominal pinjaman yang masih dalam status 'Dalam Proses'
        $totalPengajuan = Pinjaman::where('status', 'Dalam Proses')->sum('jumlah_pinjaman');

        // Menghitung total denda keseluruhan
        $totalDenda = Pinjaman::whereNotNull('total_denda')->sum('total_denda');

        // Menghitung jumlah anggota yang memiliki denda
        $jumlahAnggotaDenda = Pinjaman::whereNotNull('total_denda')
            ->where('total_denda', '>', 0)
            ->distinct('user_id')
            ->count('user_id');

        $pinjamanBulanan = DB::table('pinjaman')
            ->select(DB::raw('DATE_FORMAT(tanggal_pengajuan, "%b") as bulan'), DB::raw('SUM(jumlah_pinjaman) as total'))
            ->whereYear('tanggal_pengajuan', date('Y')) // Ambil tahun ini saja
            ->groupBy('bulan')
            ->orderBy(DB::raw('STR_TO_DATE(bulan, "%b")')) // Urutkan sesuai urutan bulan
            ->pluck('total', 'bulan')
            ->toArray();

        // Ambil data angsuran per bulan
        $angsuranBulanan = DB::table('riwayat_pembayaran')
            ->select(DB::raw('DATE_FORMAT(tanggal_pembayaran, "%b") as bulan'), DB::raw('SUM(jumlah_pembayaran) as total'))
            ->whereYear('tanggal_pembayaran', date('Y'))
            ->groupBy('bulan')
            ->orderBy(DB::raw('STR_TO_DATE(bulan, "%b")'))
            ->pluck('total', 'bulan')
            ->toArray();


        return view('admin.dashboard-admin', compact(
            'jumlahAnggota',
            'jumlahSimpananWajib',
            'jumlahSimpananSukarela',
            'jumlahPinjaman',
            'jumlahAngsuran',
            'jumlahPengajuan',
            'totalSimpananWajib',
            'totalSimpananSukarela',
            'totalSimpananAnggota',
            'totalPinjaman',
            'totalAngsuran',
            'totalPengajuan',
            'totalDenda',
            'jumlahAnggotaDenda',
            'pinjamanBulanan',
            'angsuranBulanan'
        ));
    }
}
