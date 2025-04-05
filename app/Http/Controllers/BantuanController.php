<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\RiwayatPembayaran;
use App\Models\Pinjaman;
use App\Models\Setting; // Tambahkan model Setting

class BantuanController extends Controller
{
    function bantuan()
    {
        $kontak = Setting::whereIn('key', ['alamat', 'telepon', 'email'])->get();
        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();

        $userId = Auth::id();

        $pinjamanAktif = Pinjaman::where('user_id', $userId)
            ->where('status', 'Aktif')
            ->first();

        $pembayaranProses = RiwayatPembayaran::where('user_id', auth()->id())
            ->where('status', 'Dalam Proses')
            ->exists();

        $statusWajib = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->latest('updated_at') // Ambil data terbaru berdasarkan updated_at
            ->first();

        return view('user/bantuan', compact('statusWajib', 'simpanan', 'kontak', 'pinjamanAktif', 'pembayaranProses'));
    }

    public function kirimPesan(Request $request)
    {
        $request->validate([
            'message' => 'required|string|min:5|max:500',
        ]);

        $notifikasi = Notifikasi::create([
            'user_id' => null, // ✅ Biarkan NULL agar bisa difilter untuk admin
            'nama_pengirim' => Auth::user()->fullname ?? 'User Tidak Dikenal', // ✅ Simpan fullname user yang login
            'gambar_pengirim' => Auth::user()->gambar ?? 'User Tidak Dikenal', // ✅ Simpan gambar user yang login
            'message' => $request->message,
            'type' => 'info',
            'icon' => 'bi-chat-dots',
            'is_read' => false,
            'is_from_user' => true, // ✅ Menandai bahwa pesan berasal dari user
            'status_balasan' => 'pending', // Status awal
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim ke admin!');
    }
}
