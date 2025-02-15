<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporan()
    {
        // Menghitung total anggota
        $totalAnggota = User::count();

        // Menghitung total simpanan
        $totalSimpanan = Simpanan::sum('jumlah'); // Jika tabel bernama simpans, gunakan 'simpans'

        // Menghitung total pinjaman
        $totalPinjaman = Pinjaman::sum('jumlah_pinjaman');

        // Menghitung total angsuran
        $totalAngsuran = RiwayatPembayaran::sum('jumlah_pembayaran');

        // Mengambil data laporan dari tiga kategori: Simpanan, Pinjaman, Angsuran
        $laporanSimpanan = Simpanan::join('users', 'simpanans.user_id', '=', 'users.id') // Pastikan tabelnya 'simpanans'
            ->select(
                DB::raw('"Simpanan" as jenis'),
                'users.fullname as nama',
                'simpanans.jumlah as jumlah', // Pastikan 'simpanans' digunakan
                'simpanans.tanggal_transaksi as tanggal', // Pastikan nama kolom sesuai
                'simpanans.status as status' // Pastikan nama kolom sesuai
            );

        $laporanPinjaman = Pinjaman::join('users', 'pinjaman.user_id', '=', 'users.id')
            ->select(
                DB::raw('"Pinjaman" as jenis'),
                'users.fullname as nama',
                'pinjaman.jumlah_pinjaman as jumlah',
                'pinjaman.tanggal_pengajuan as tanggal',
                'pinjaman.status as status'
            );

        $laporanAngsuran = RiwayatPembayaran::join('pinjaman', 'riwayat_pembayaran.pinjaman_id', '=', 'pinjaman.id')
            ->join('users', 'riwayat_pembayaran.user_id', '=', 'users.id')
            ->select(
                DB::raw('"Angsuran" as jenis'),
                'users.fullname as nama',
                'riwayat_pembayaran.jumlah_pembayaran as jumlah',
                'riwayat_pembayaran.tanggal_pembayaran as tanggal',
                DB::raw('CASE 
                    WHEN pinjaman.status = "Lunas" THEN "Lunas"
                    ELSE "Belum Lunas"
                END as status')
            );

        // Gabungkan semua laporan
        $laporan = $laporanSimpanan->union($laporanPinjaman)->union($laporanAngsuran)->get();

        return view('admin.laporan', compact(
            'totalAnggota', 
            'totalSimpanan', 
            'totalPinjaman', 
            'totalAngsuran', 
            'laporan'
        ));
    }
}
