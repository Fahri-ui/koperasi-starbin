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

        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Hitung saldo dari simpaan sukarela
        $totalSimpananSukarela = Simpanan::where('jenis', 'sukarela')
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->whereMonth('tanggal_transaksi', $currentMonth)
            ->whereYear('tanggal_transaksi', $currentYear)
            ->sum('jumlah');

        // Menghitung total saldo simpanan wajib 
        $totalSimpananWajib = Simpanan::where('jenis', 'wajib')
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->whereMonth('tanggal_transaksi', $currentMonth)
            ->whereYear('tanggal_transaksi', $currentYear)
            ->sum('jumlah');

        $totalSimpananAnggota = Simpanan::where('jenis', 'anggota')
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->whereMonth('tanggal_transaksi', $currentMonth)
            ->whereYear('tanggal_transaksi', $currentYear)
            ->sum('jumlah');

        $SeluruhtotalSimpananSukarela = Simpanan::where('jenis', 'sukarela')
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->sum('jumlah');

        // Menghitung total saldo simpanan wajib 
        $SeluruhtotalSimpananWajib = Simpanan::where('jenis', 'wajib')
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->sum('jumlah');

        $SeluruhtotalSimpananAnggota = Simpanan::where('jenis', 'anggota')
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

        $totalKeuangan =
            $SeluruhtotalSimpananSukarela +
            $SeluruhtotalSimpananWajib +
            $SeluruhtotalSimpananAnggota +
            $totalAngsuran +
            $totalDenda -
            $totalPinjaman;

        // Menghitung jumlah anggota yang memiliki denda
        $jumlahAnggotaDenda = Pinjaman::whereNotNull('total_denda')
            ->where('total_denda', '>', 0)
            ->distinct('user_id')
            ->count('user_id');

        $pinjamanBulanan = DB::table('pinjaman')
            ->select(DB::raw('DATE_FORMAT(tanggal_pengajuan, "%b") as bulan'), DB::raw('SUM(jumlah_pinjaman) as total'))
            ->whereYear('tanggal_pengajuan', date('Y')) // Ambil tahun ini saja
            ->whereIn('status', ['Aktif', 'Lunas']) // Hanya ambil pinjaman dengan status tertentu
            ->groupBy('bulan')
            ->orderBy(DB::raw('STR_TO_DATE(bulan, "%b")')) // Urutkan sesuai urutan bulan
            ->pluck('total', 'bulan')
            ->toArray();

        // Ambil data angsuran per bulan
        $angsuranBulanan = DB::table('riwayat_pembayaran')
            ->select(DB::raw('DATE_FORMAT(tanggal_pembayaran, "%b") as bulan'), DB::raw('SUM(jumlah_pembayaran) as total'))
            ->whereYear('tanggal_pembayaran', date('Y'))
            ->where('status', 'Berhasil') // Hanya ambil angsuran yang statusnya berhasil
            ->groupBy('bulan')
            ->orderBy(DB::raw('STR_TO_DATE(bulan, "%b")'))
            ->pluck('total', 'bulan')
            ->toArray();

        // Ambil data denda per bulan dari tabel pinjaman
        $dendaBulanan = DB::table('pinjaman')
            ->select(DB::raw('DATE_FORMAT(created_at, "%b") as bulan'), DB::raw('SUM(total_denda) as total'))
            ->whereYear('created_at', date('Y')) // Ambil hanya data dalam tahun ini
            ->whereNotNull('total_denda') // Pastikan hanya data yang memiliki denda
            ->groupBy('bulan')
            ->orderBy(DB::raw('STR_TO_DATE(bulan, "%b")')) // Urutkan sesuai urutan bulan
            ->pluck('total', 'bulan')
            ->toArray();


        return view('admin.dashboard-admin', compact(
            'jumlahAnggota',
            'jumlahSimpananWajib',
            'jumlahSimpananSukarela',
            'jumlahPinjaman',
            'dendaBulanan',
            'jumlahAngsuran',
            'jumlahPengajuan',
            'totalSimpananWajib',
            'totalSimpananSukarela',
            'totalSimpananAnggota',
            'SeluruhtotalSimpananWajib',
            'SeluruhtotalSimpananSukarela',
            'SeluruhtotalSimpananAnggota',
            'totalPinjaman',
            'totalAngsuran',
            'totalPengajuan',
            'totalDenda',
            'jumlahAnggotaDenda',
            'pinjamanBulanan',
            'angsuranBulanan',
            'totalKeuangan'
        ));
    }
}
