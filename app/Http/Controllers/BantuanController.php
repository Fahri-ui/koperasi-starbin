<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\Setting; // Tambahkan model Setting

class BantuanController extends Controller
{
    function bantuan()
    {
        $kontak = Setting::whereIn('key', ['alamat', 'telepon', 'email'])->get();
        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();
        return view('user/bantuan', compact('simpanan', 'kontak'));
    }

    public function kirimPesan(Request $request)
    {
        $request->validate([
            'message' => 'required|string|min:5|max:500',
        ]);

        $notifikasi = Notifikasi::create([
            'user_id' => null, // ✅ Biarkan NULL agar bisa difilter untuk admin
            'nama_pengirim' => Auth::user()->fullname ?? 'User Tidak Dikenal', // ✅ Simpan fullname user yang login
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
