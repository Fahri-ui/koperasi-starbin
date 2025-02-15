<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;

class StatistikKeuanganController extends Controller
{
    public function statistikkeuangan()
    {
        // Menghitung total simpanan
        $totalSimpanan = Simpanan::sum('jumlah');
        $simpananWajib = Simpanan::where('jenis', 'wajib')->sum('jumlah');
        $simpananSukarela = Simpanan::where('jenis', 'sukarela')->sum('jumlah');

        // Menghitung total pinjaman
        $totalPinjaman = Pinjaman::sum('jumlah_pinjaman');

        // Menghitung total angsuran
        $totalAngsuran = RiwayatPembayaran::sum('jumlah_pembayaran');

        return view('admin.statistik-keuangan', compact(
            'totalSimpanan', 'simpananWajib', 'simpananSukarela',
            'totalPinjaman', 'totalAngsuran'
        ));
    }
}
