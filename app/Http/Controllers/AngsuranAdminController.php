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
        $angsuran = RiwayatPembayaran::with('user', 'pinjaman')->get();
    
        $totalDisetujui = $angsuran->where('status', 'Berhasil')->sum('jumlah_pembayaran');
        $totalTertunda = $angsuran->where('status', 'Dalam Proses')->sum('jumlah_pembayaran');
        $jumlahTransaksi = $angsuran->count();
    
        return view('admin.angsuran-admin', compact('angsuran', 'totalDisetujui', 'totalTertunda', 'jumlahTransaksi'));
    }    

    public function approve($id)
    {
        $angsuran = RiwayatPembayaran::findOrFail($id);
        $pinjaman = $angsuran->pinjaman;

        $pinjaman->sisa_angsuran -= $angsuran->jumlah_pembayaran;
        $pinjaman->total_denda -= $angsuran->jumlah_denda_dibayar;

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
