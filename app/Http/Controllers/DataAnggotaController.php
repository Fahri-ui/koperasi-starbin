<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Menggunakan model User

class DataAnggotaController extends Controller
{
    // Menampilkan semua pengguna (admin & user)
    public function dataanggota(Request $request)
    {
        $search = $request->input('search');

        $users = User::when($search, function ($query) use ($search) {
            return $query->where('fullname', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%");
        })->orderBy('id', 'asc')->get();

        return view('admin.data-anggota', compact('users', 'search'));
    }

    // Fungsi untuk menghapus pengguna
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        $user->delete(); // Hapus user dari database

        return redirect()->route('dataanggota')->with('success', 'Pengguna berhasil dihapus.');
    }

    public function updateRole(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->role = $request->role;
        $user->save();

        return response()->json(['success' => true, 'message' => 'Role berhasil diperbarui.']);
    }
}