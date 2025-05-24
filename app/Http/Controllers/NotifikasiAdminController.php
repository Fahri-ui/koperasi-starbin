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
        Notifikasi::where('user_id', null)
            ->where('is_read', false)
            ->update(['is_read' => true]);
    
        // Hapus notifikasi lebih dari 1 tahun
        Notifikasi::where('created_at', '<', now()->subYear())->delete();
    
        // Ambil notifikasi dari user ke admin (user_id NULL) dalam 1 tahun terakhir
        $notifikasi = Notifikasi::whereNull('user_id')
            ->where('created_at', '>=', now()->subYear())
            ->with('user')
            ->orderBy('created_at', 'desc') // Urutkan dari yang terbaru
            ->get();
    
        // Kelompokkan berdasarkan bulan dan tahun, lalu dalam setiap bulan, urutkan lagi dari yang terbaru
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
