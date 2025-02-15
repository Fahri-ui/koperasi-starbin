<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\User;
use App\Models\RiwayatPembayaran;
use Illuminate\Support\Facades\DB;

class AngsuranAdminController extends Controller
{
    public function angsuran()
    {
        // Total Angsuran Dibayar
        $totalDibayar = RiwayatPembayaran::sum('jumlah_pembayaran');

        // Jumlah Angsuran Tersisa (Total sisa angsuran dari pinjaman yang masih aktif)
        $totalTersisa = Pinjaman::where('status', 'Aktif')->sum('sisa_angsuran');

        // Jumlah Transaksi Angsuran (Total pembayaran yang tercatat)
        $jumlahTransaksi = RiwayatPembayaran::count();

        // Ambil data pinjaman dengan status "Aktif" dan relasikan dengan riwayat_pembayaran
        $angsuran = Pinjaman::join('users', 'pinjaman.user_id', '=', 'users.id')
            ->leftJoin('riwayat_pembayaran', 'pinjaman.id', '=', 'riwayat_pembayaran.pinjaman_id') // LEFT JOIN agar tetap tampil meskipun belum ada pembayaran
            ->where('pinjaman.status', 'Aktif') // Hanya ambil pinjaman dengan status Aktif
            ->select(
                'pinjaman.id as id_pinjaman',
                'users.fullname as nama_anggota',
                'pinjaman.jumlah_pinjaman', // Tambahkan jumlah pinjaman
                DB::raw('COALESCE(riwayat_pembayaran.jumlah_pembayaran, 0) as nominal_bayar'), // Jika NULL, tampilkan 0
                DB::raw('COALESCE(DATE(riwayat_pembayaran.tanggal_pembayaran), "-") as tanggal_bayar'), // Hanya ambil tanggal (tanpa jam)
                DB::raw('COALESCE(pinjaman.sisa_angsuran, 0) as sisa_angsuran'), // Jika NULL, jadikan 0
                'pinjaman.tanggal_jatuh_tempo',
                DB::raw('COALESCE(riwayat_pembayaran.metode_pembayaran, "-") as metode_pembayaran'), // Jika NULL, tampilkan "-"
                DB::raw('"Belum Lunas" as status'), // Ubah "Aktif" menjadi "Belum Lunas"
                DB::raw('COALESCE(riwayat_pembayaran.bukti_pembayaran, "-") as bukti_pembayaran') // Jika NULL, tampilkan "-"
            )
            ->orderBy('pinjaman.id', 'asc') // Urutkan berdasarkan ID pinjaman
            ->get();

        return view('admin.angsuran-admin', compact('angsuran','totalDibayar', 'totalTersisa', 'jumlahTransaksi'));
    }
}
