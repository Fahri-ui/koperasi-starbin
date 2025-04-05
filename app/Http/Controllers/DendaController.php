<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DendaController extends Controller
{
    public function denda()
    {
        // Ambil semua pinjaman yang belum lunas & memiliki denda
        $laporanDenda = Pinjaman::where('pinjaman.status', ['Aktif', 'Menunggak'])
            ->where('pinjaman.total_denda', '>', 0)
            ->join('users', 'pinjaman.user_id', '=', 'users.id')
            ->leftJoin('riwayat_pembayaran', 'pinjaman.id', '=', 'riwayat_pembayaran.pinjaman_id')
            ->select(
                'users.fullname as nama',
                'pinjaman.id as id_pinjaman',
                'pinjaman.jumlah_pinjaman',
                'pinjaman.tanggal_jatuh_tempo',
                'pinjaman.status_denda',
                'pinjaman.sisa_angsuran',
                DB::raw('COALESCE(pinjaman.total_denda, 0) as denda'),
                DB::raw('(pinjaman.jumlah_pinjaman + COALESCE(pinjaman.total_denda, 0)) as total_bayar')
            )
            ->orderBy('pinjaman.tanggal_jatuh_tempo', 'asc')
            ->get();

        // Hitung total denda dari semua anggota
        $totalDenda = $laporanDenda->sum('denda');

        // Hitung jumlah pinjaman yang terkena denda
        $jumlahPinjamanBermasalah = $laporanDenda->count();

        // Hitung jumlah anggota yang terkena denda
        $jumlahAnggotaDenda = $laporanDenda->unique('nama')->count();

        return view('admin.denda', compact(
            'laporanDenda',
            'totalDenda',
            'jumlahPinjamanBermasalah',
            'jumlahAnggotaDenda'
        ));
    }
}
