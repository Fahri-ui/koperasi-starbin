<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User; // Tambahkan model User

class ProfilAdminController extends Controller
{
    public function profiladmin()
    {
        return view('admin.profil-admin');
    }

    public function update(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:8',
            'confirm_password' => 'same:password',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'phone' => 'required|regex:/^62[0-9]{9,13}$/|min:10|max:15',
            'address' => 'required|min:15',
        ]);

        try {
            $user = Auth::user();
            if (!$user) {
                return response()->json(['success' => false, 'message' => 'Pengguna tidak ditemukan.']);
            }

            if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
                $gambar_file = $request->file('gambar');
                $nama_gambar = date('ymdhis') . '.' . $gambar_file->getClientOriginalExtension();
                $gambar_file->move(public_path('picture/account'), $nama_gambar);

                if ($user->gambar && file_exists(public_path('picture/account/' . $user->gambar))) {
                    unlink(public_path('picture/account/' . $user->gambar));
                }

                $user->gambar = $nama_gambar;
            }

            $user->fullname = $request->fullname;
            $user->email = $request->email;
            $user->password = $request->password ? bcrypt($request->password) : $user->password;
            $user->phone = $request->phone;
            $user->address = $request->address;

            $user->save();

            return response()->json(['success' => true, 'message' => 'Profil berhasil diperbarui.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()]);
        }
    }
}
