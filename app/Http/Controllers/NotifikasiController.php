<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Notifikasi;
use App\Models\Simpanan;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    public function notifikasi()
    {
        $userId = auth()->id();
        
        // Tandai semua notifikasi sebagai telah dibaca saat user membuka halaman
        Notifikasi::where(function ($query) use ($userId) {
            $query->where('user_id', $userId)
                ->orWhere('user_id', 0); // 🔥 Global Message juga ditandai "dibaca"
        })
            ->where('is_read', false)
            ->update(['is_read' => true]);

        // Ambil notifikasi dalam 1 tahun terakhir, kecuali "info"
        $notifikasi = Notifikasi::where(function ($query) use ($userId) {
            $query->where('user_id', 0) // Global Message
                ->orWhere('user_id', $userId); // Personal Message
        })
            ->where('created_at', '>=', now()->subYear()) // Hanya 1 tahun terakhir
            ->where('type', '!=', 'info') // Tidak tampilkan "info"
            ->orderBy('created_at', 'desc')
            ->get();

        // Kelompokkan berdasarkan bulan dan tahun
        $notifikasiPerBulan = $notifikasi->groupBy(function ($item) {
            return Carbon::parse($item->created_at)->format('Y-m');
        });

        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();

        return view('user.notifikasi', compact('notifikasiPerBulan', 'simpanan'));
    }
}
