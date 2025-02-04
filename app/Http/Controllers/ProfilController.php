<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfilController extends Controller
{
    function profil()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Hitung total saldo simpanan sukarela milik user yang sedang login
        $totalSukarela = Simpanan::where('user_id', $user->id)
            ->where('jenis', 'sukarela') // Hanya ambil simpanan jenis sukarela
            ->sum('jumlah'); // Menjumlahkan semua transaksi sukarela user

        // Hitung total pinjaman yang diambil user (hanya yang statusnya tidak "Ditolak")
        $totalPinjaman = Pinjaman::where('user_id', $user->id)
            ->where('status', '!=', 'Ditolak') // Pastikan pinjaman yang dihitung bukan yang ditolak
            ->sum('jumlah_pinjaman');

        // Kirim variabel ke view
        return view('user.profil', compact('totalSukarela', 'totalPinjaman'));
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
        ], [
            'fullname.required' => 'Nama wajib diisi.',
            'fullname.min' => 'Nama minimal 5 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email telah terdaftar.',
            'password.min' => 'Password minimal 8 karakter.',
            'confirm_password.same' => 'Konfirmasi password tidak sesuai.',
            'gambar.image' => 'Gambar harus berupa file gambar.',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.regex' => 'Nomor telepon harus diawali dengan kode negara (62).',
            'phone.min' => 'Nomor telepon minimal 10 digit.',
            'phone.max' => 'Nomor telepon maksimal 15 digit.',
            'address.required' => 'Alamat wajib diisi.',
            'address.min' => 'Alamat minimal 15 karakter.',
        ]);

        // Ambil data pengguna
        $user = Auth::user();

        // Debug apakah $user adalah instance User
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Pengguna tidak ditemukan atau belum login.']);
        }

        if (!($user instanceof \App\Models\User)) {
            return redirect()->back()->withErrors(['error' => 'Objek bukan instance dari User model.']);
        }

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Pengguna tidak ditemukan.']);
        }

        // Jika ada gambar yang diunggah
        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            $gambar_file = $request->file('gambar');
            $nama_gambar = date('ymdhis') . '.' . $gambar_file->getClientOriginalExtension();
            $gambar_file->move(public_path('picture/account'), $nama_gambar);

            // Hapus gambar lama jika ada
            if ($user->gambar && file_exists(public_path('picture/account/' . $user->gambar))) {
                unlink(public_path('picture/account/' . $user->gambar));
            }

            // Perbarui nama gambar pengguna
            $user->gambar = $nama_gambar;
        }

        // Perbarui data pengguna
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = $request->password ? bcrypt($request->password) : $user->password;
        $user->phone = $request->phone;
        $user->address = $request->address;

        // Simpan perubahan
        try {
            $user->save();
            return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()]);
        }
    }
}
