<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use App\Models\User;

class ShareMassageController extends Controller
{
    public function sharemassage()
    {
        $notifikasi = Notifikasi::where('type', 'announcement')
            ->with('user') // Pastikan relasi user dimuat
            ->orderBy('created_at', 'desc')
            ->get();
    
        return view('admin.kelola-pesan', compact('notifikasi'));
    }    

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|string',
            'message' => 'required|string|max:500',
        ]);
    
        if ($request->user_id === 'all') {
            // Hanya buat satu notifikasi global (tanpa user_id)
            Notifikasi::create([
                'user_id' => 0, // <-- Ini yang membedakan Global Message
                'message' => $request->message,
                'type' => 'announcement',
                'icon' => 'bi-megaphone',
                'is_read' => false,
            ]);
        } else {
            // Kirim ke satu user tertentu
            $user = User::where('id', $request->user_id)->where('role', 'user')->first();
            if (!$user) {
                return redirect()->back()->with('error', 'User tidak ditemukan.');
            }
    
            Notifikasi::create([
                'user_id' => $user->id,
                'message' => $request->message,
                'type' => 'announcement',
                'icon' => 'bi-megaphone',
                'is_read' => false,
            ]);
        }
    
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }    

    public function destroy($id)
    {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->delete();

        return redirect()->back()->with('success', 'Pesan berhasil dihapus.');
    }
}
