<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Simpanan;
use App\Models\Pinjaman;


class DataAnggotaController extends Controller
{
    // Get Tampilan Utama
    public function dataanggota(Request $request)
    {
        $search = $request->input('search');

        $users = User::when($search, function ($query) use ($search) {
            return $query->where('fullname', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%");
        })->orderBy('id', 'asc')->get();

        // 1. Menghitung seluruh data pada tabel users
        $totalUsers = User::count();

        // 2. Menghitung jumlah data dengan role 'admin'
        $jumlahAdmin = User::where('role', 'admin')->count();

        // 3. Menghitung jumlah data dengan role 'user'
        $jumlahUser = User::where('role', 'user')->count();

        return view('admin.data-anggota', compact('users', 'search', 'jumlahUser', 'jumlahAdmin', 'totalUsers'));
    }

    // Delate Aksi Hapus Anggota
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => true, 'message' => 'Pengguna berhasil dihapus.']);
    }

    // Post Aksi Mengubah Role Anggota
    public function updateRole(Request $request)
    {
        logger('Request masuk ke controller: ' . json_encode($request->all()));

        $request->validate([
            'id' => 'required|exists:users,id',
            'role' => 'required|in:user,admin'
        ]);

        $user = User::findOrFail($request->id);
        $user->role = $request->role;
        $user->save();

        return response()->json(['success' => true, 'message' => 'Role berhasil diperbarui.']);
    }

    // Get Tampilan Pou-up
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

    // Get Aksi Tambah Anggota
    public function store(Request $request)
    {
        try {
            $request->validate([
                'fullname' => 'required|min:5',
                'email' => 'required|unique:users|email',
                'password' => 'required|min:8',
                'phone' => 'required|regex:/^62[0-9]{9,13}$/|min:10|max:15',
                'address' => 'required|min:15',
                'gambar' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
            ]);

            $gambar_file = $request->file('gambar');
            $nama_gambar = date('ymdhis') . '.' . $gambar_file->getClientOriginalExtension();
            $gambar_file->move(public_path('picture/account'), $nama_gambar);

            User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'gambar' => $nama_gambar,
                'role' => $request->role ?? 'user',
            ]);

            return response()->json(['success' => true, 'message' => 'Anggota baru berhasil ditambahkan!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
