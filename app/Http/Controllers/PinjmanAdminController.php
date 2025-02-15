<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use App\Models\User;

class PinjmanAdminController extends Controller
{
    public function pinjamanadmin()
    {
        // Ambil semua data pinjaman dengan relasi ke user
        $pinjaman = Pinjaman::with('user')->get();

        // Hitung total pinjaman dan sisa pinjaman
        $totalPinjaman = $pinjaman->sum('jumlah_pinjaman');
        $totalSisaPinjaman = $pinjaman->sum('sisa_angsuran');

        // Hitung jumlah status pinjaman
        $jumlahLunas = $pinjaman->where('status', 'Lunas')->count();
        $jumlahProses = $pinjaman->where('status', 'Ditolak')->count();
        $jumlahMenunggak = $pinjaman->where('status', 'Aktif')->count();

        return view('admin.pinjaman-admin', compact('pinjaman', 'totalPinjaman', 'totalSisaPinjaman', 'jumlahLunas', 'jumlahProses', 'jumlahMenunggak'));
    }
}
