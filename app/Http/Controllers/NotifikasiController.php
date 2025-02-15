<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    public function notifikasi()
    {
        $userId = auth()->id();

        // Tandai semua notifikasi sebagai telah dibaca saat user membuka halaman
        Notifikasi::where('user_id', $userId)
            ->where('is_read', false)
            ->update(['is_read' => true]);

        // Ambil notifikasi dalam 1 tahun terakhir
        $notifikasi = Notifikasi::where('user_id', $userId)
            ->where('created_at', '>=', now()->subYear())
            ->orderBy('created_at', 'desc')
            ->get();

        $notifikasi = Notifikasi::where('user_id', 0) // Global Message
            ->orWhere('user_id', $userId) // Personal Message
            ->orderBy('created_at', 'desc')
            ->get();

        // Kelompokkan berdasarkan bulan dan tahun
        $notifikasiPerBulan = $notifikasi->groupBy(function ($item) {
            return Carbon::parse($item->created_at)->format('Y-m');
        });

        return view('user.notifikasi', compact('notifikasiPerBulan'));
    }
}
