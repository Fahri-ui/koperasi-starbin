<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use Carbon\Carbon;

class AngsuranAdminController extends Controller
{
    public function index()
    {
        $angsuran = RiwayatPembayaran::with('user', 'pinjaman')
            ->whereDate('tanggal_pembayaran', now()) // Filter hanya untuk hari ini
            ->get();

        $totalDisetujui = $angsuran->where('status', 'Berhasil')->count();
        $totalTertunda = $angsuran->where('status', 'Dalam Proses')->sum('jumlah_pembayaran');
        $jumlahTransaksi = $angsuran->count();

        return view('admin.angsuran-admin', compact('angsuran', 'totalDisetujui', 'totalTertunda', 'jumlahTransaksi'));
    }

    public function approve($id)
    {
        $angsuran = RiwayatPembayaran::findOrFail($id);
        $pinjaman = $angsuran->pinjaman;

        $jumlahBayar = $angsuran->jumlah_pembayaran;

        // Lunasi denda dulu
        if ($pinjaman->total_denda > 0) {
            if ($jumlahBayar >= $pinjaman->total_denda) {
                $jumlahBayar -= $pinjaman->total_denda;
                $pinjaman->total_denda = 0;
                $pinjaman->status_denda = 'Lunas';
            } else {
                $pinjaman->total_denda -= $jumlahBayar;
                $jumlahBayar = 0;
            }
        }

        // Sisa pembayaran masuk ke sisa angsuran
        if ($jumlahBayar > 0) {
            $pinjaman->sisa_angsuran -= $jumlahBayar;
        }

        // Perbarui status pinjaman
        if ($pinjaman->sisa_angsuran <= 0 && $pinjaman->total_denda <= 0) {
            $pinjaman->status = 'Lunas';
        }

        $angsuran->status = 'Berhasil';
        $angsuran->updated_at = Carbon::now();

        $pinjaman->save();
        $angsuran->save();

        return redirect()->route('angsuran')->with('success', 'Angsuran berhasil disetujui!');
    }

    public function reject($id)
    {
        $angsuran = RiwayatPembayaran::findOrFail($id);

        $angsuran->status = 'Ditolak';
        $angsuran->updated_at = Carbon::now();
        $angsuran->save();

        return redirect()->route('angsuran')->with('warning', 'Angsuran ditolak!');
    }
}
