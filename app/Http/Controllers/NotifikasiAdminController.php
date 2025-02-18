<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use Carbon\Carbon;

class NotifikasiAdminController extends Controller
{
    public function notifikasiadmin()
    {

        // Tandai semua notifikasi yang belum dibaca (is_read = false) untuk admin
        Notifikasi::where('user_id', null) // Hanya untuk pesan dari user ke admin
            ->where('is_read', false) // Hanya yang belum dibaca
            ->update(['is_read' => true]); // Ubah status is_read menjadi true

        // Hapus notifikasi lebih dari 1 tahun
        Notifikasi::where('created_at', '<', now()->subYear())->delete();

        // 🔥 Ambil notifikasi dari user (HANYA yang user_id NULL)
        $notifikasi = Notifikasi::whereNull('user_id') // ✅ Hanya pesan dari user ke admin
            ->where('created_at', '>=', now()->subYear())
            ->orderBy('created_at', 'desc')
            ->get();

        // Kelompokkan berdasarkan bulan dan tahun
        $notifikasiPerBulan = $notifikasi->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->created_at)->format('Y-m');
        });

        return view('admin.notifikasi-admin', compact('notifikasiPerBulan'));
    }

    public function tandaiSudahDibalas($id)
    {
        // Cari notifikasi berdasarkan ID
        $notifikasi = Notifikasi::findOrFail($id);

        // Perbarui status menjadi "dibalas"
        $notifikasi->update(['status_balasan' => 'dibalas']);

        return redirect()->back()->with('success', 'Pesan telah ditandai sebagai sudah dibalas.');
    }
}
