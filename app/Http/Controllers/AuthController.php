<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User; // Model untuk tabel users di database

class AuthController extends Controller
{



    // Menampilkan halaman login
    function index()
    {
        return view('auth/login'); // Mengarahkan ke halaman login
    }

    // Proses login user
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid', // Pesan kustom untuk validasi emailx
            'password.required' => 'Password wajib diisi',
        ]);

        // Auth::attempt otomatis mencocokkan password yang di-hash
        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin')->with('success', 'Halo Admin, Anda berhasil login');
            } elseif (Auth::user()->role === 'user') {
                return redirect()->route('user')->with('success', 'Berhasil login');
            }
        }

        // Jika email atau password salah
        return back()->withErrors(['email' => 'Email atau Password salah']);
    }


    // Menampilkan halaman registrasi
    function create()
    {
        return view('auth/register'); // Mengarahkan ke halaman register
    }

    // Proses registrasi user baru
    public function register(Request $request)
    {
        // Validasi input registrasi
        $request->validate([
            'fullname' => 'required|min:5', // Nama lengkap wajib diisi dan minimal 5 karakter
            'email' => 'required|unique:users|email', // Email harus unik dan berbentuk email yang valid
            'password' => 'required|min:8', // Password minimal 8 karakter
            'phone' => 'required|regex:/^62[0-9]{9,13}$/|min:10|max:15', // Harus dimulai dengan 62 dan panjang 9-13 angka
            'address' => 'required|min:15',
            'gambar' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048', // File gambar wajib diunggah dengan format tertentu
        ], [
            'fullname.required' => 'Full Name wajib diisi',
            'fullname.min' => 'Full Name minimal 5 karakter',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email telah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'phone.required' => 'Nomor telepon harus diisi',
            'phone.regex' => 'Nomor telepon harus dimulai dengan kode negara (62) dan hanya angka',
            'phone.min' => 'Minimal 10 nomor',
            'phone.max' => 'Maksimal 15 nomor',
            'address.required' => 'Alamat wajib diisi',
            'address.min' => 'Alamat minimal 15 karakter',
            'gambar.required' => 'Gambar harus diunggah',
            'gambar.image' => 'Gambar yang diunggah harus berupa file gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, jpg, png, atau gif',
            'gambar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        // Memproses gambar yang diupload
        $gambar_file = $request->file('gambar'); // Mendapatkan file dari input
        $nama_gambar = date('ymdhis') . '.' . $gambar_file->getClientOriginalExtension(); // Membuat nama file unik
        $gambar_file->move(public_path('picture/account'), $nama_gambar); // Memindahkan file ke folder public/picture/account

        // Menyiapkan data untuk disimpan di database
        $inforegister = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Password di-hash dengan bcrypt
            'phone' => $request->phone,
            'address' => $request->address,
            'gambar' => $nama_gambar,
            'role' => 'user', // Default role untuk user baru adalah 'user'
        ];

        // Menyimpan data ke tabel users
        User::create($inforegister);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Menghapus sesi autentikasi pengguna
        $request->session()->invalidate(); // Menghapus data sesi
        $request->session()->regenerateToken(); // Membuat CSRF token baru

        // Redirect ke landing page
        return redirect('/')->with('success', 'Anda berhasil logout');
    }
}
