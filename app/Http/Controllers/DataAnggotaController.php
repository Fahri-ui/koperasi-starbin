<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Simpanan;
use App\Models\Pinjaman;


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
        dd($request->all()); // Cek data yang diterima
    
        $user = User::findOrFail($request->id);
        $user->role = $request->role;
        $user->save();
    
        return response()->json(['success' => true, 'message' => 'Role berhasil diperbarui.']);
    }
    

    public function getUserSummary($id)
    {
        $totalSimpananWajib = Simpanan::where('user_id', $id)
            ->where('jenis', 'wajib')
            ->sum('jumlah');

        $totalSimpananSukarela = Simpanan::where('user_id', $id)
            ->where('jenis', 'sukarela')
            ->sum('jumlah');

        $totalPinjaman = Pinjaman::where('user_id', $id)
            ->whereIn('status', ['Aktif', 'Dalam Proses'])
            ->sum('jumlah_pinjaman');

        return response()->json([
            'totalSimpananWajib' => number_format($totalSimpananWajib, 0, ',', '.'),
            'totalSimpananSukarela' => number_format($totalSimpananSukarela, 0, ',', '.'),
            'totalPinjaman' => number_format($totalPinjaman, 0, ',', '.'),
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input sama seperti registrasi
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'phone' => 'required|regex:/^62[0-9]{9,13}$/|min:10|max:15',
            'address' => 'required|min:15',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
        ], [
            'fullname.required' => 'Full Name wajib diisi',
            'fullname.min' => 'Full Name minimal 5 karakter',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email telah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'phone.required' => 'Nomor telepon harus diisi',
            'phone.regex' => 'Nomor telepon harus dimulai dengan kode negara (62)',
            'phone.min' => 'Minimal 10 nomor',
            'phone.max' => 'Maksimal 15 nomor',
            'address.required' => 'Alamat wajib diisi',
            'address.min' => 'Alamat minimal 15 karakter',
            'gambar.required' => 'Gambar harus diunggah',
            'gambar.image' => 'Gambar yang diunggah harus berupa file gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, jpg, png, atau gif',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        // Proses upload gambar
        $gambar_file = $request->file('gambar');
        $nama_gambar = date('ymdhis') . '.' . $gambar_file->getClientOriginalExtension();
        $gambar_file->move(public_path('picture/account'), $nama_gambar);

        // Simpan data pengguna ke database
        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'gambar' => $nama_gambar,
            'role' => $request->role ?? 'user', // Bisa atur role, default user
        ]);

        // Redirect ke halaman data anggota dengan pesan sukses
        return redirect()->route('dataanggota')->with('success', 'Anggota baru berhasil ditambahkan.');
    }
}
