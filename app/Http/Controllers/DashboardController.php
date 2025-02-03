<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simpanan; 
use App\Models\Pinjaman; 
use App\Models\RiwayatPembayaran; // Import model RiwayatPembayaran
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Hitung total saldo simpanan sukarela
        $totalSukarela = Simpanan::where('user_id', $user->id)
            ->where('jenis', 'sukarela')
            ->sum('jumlah');

        // Hitung total pinjaman yang diambil user
        $totalPinjaman = Pinjaman::where('user_id', $user->id)
            ->where('status', '!=', 'Ditolak')
            ->sum('jumlah_pinjaman');

        // Ambil semua transaksi (gabungan dari Simpanan, Pinjaman, dan Riwayat Pembayaran)
        $riwayatTransaksi = collect([]);

        // Ambil data simpanan
        $simpanans = Simpanan::where('user_id', $user->id)
            ->select('kode_transaksi', 'tanggal_transaksi', 'jumlah', 'jenis_transaksi')
            ->get()
            ->map(function ($simpanan) {
                return [
                    'deskripsi' => ucfirst($simpanan->jenis_transaksi) . ' Simpanan',
                    'tanggal' => $simpanan->tanggal_transaksi ? Carbon::parse($simpanan->tanggal_transaksi)->translatedFormat('d F Y') : '-',
                    'jumlah' => number_format($simpanan->jumlah, 0, ',', '.'),
                ];
            });

        // Ambil data pinjaman
        $pinjamans = Pinjaman::where('user_id', $user->id)
            ->select('id', 'tanggal_pinjaman', 'jumlah_pinjaman', 'status')
            ->get()
            ->map(function ($pinjaman) {
                return [
                    'deskripsi' => 'Pinjaman ' . ucfirst($pinjaman->status),
                    'tanggal' => $pinjaman->tanggal_pinjaman ? Carbon::parse($pinjaman->tanggal_pinjaman)->translatedFormat('d F Y') : '-',
                    'jumlah' => number_format($pinjaman->jumlah_pinjaman, 0, ',', '.'),
                ];
            });

        // Ambil data pembayaran pinjaman
        $pembayarans = RiwayatPembayaran::where('user_id', $user->id)
            ->select('pinjaman_id', 'tanggal_pembayaran', 'jumlah_pembayaran', 'metode_pembayaran')
            ->get()
            ->map(function ($pembayaran) {
                return [
                    'deskripsi' => 'Pembayaran Pinjaman via ' . ucfirst($pembayaran->metode_pembayaran),
                    'tanggal' => $pembayaran->tanggal_pembayaran ? Carbon::parse($pembayaran->tanggal_pembayaran)->translatedFormat('d F Y') : '-',
                    'jumlah' => '-' . number_format($pembayaran->jumlah_pembayaran, 0, ',', '.'), // Ditampilkan sebagai pengurangan
                ];
            });

       // Gabungkan semua transaksi, urutkan berdasarkan tanggal DESC, dan reset indeks
        $riwayatTransaksi = $simpanans
        ->merge($pinjamans)
        ->merge($pembayarans)
        ->sortByDesc('tanggal')
        ->values(); // Reset indeks agar urutan angka sesuai dengan tabel

        // Kirim ke view
        return view('user.dashboard', compact('totalSukarela', 'totalPinjaman', 'riwayatTransaksi'));
    }
}