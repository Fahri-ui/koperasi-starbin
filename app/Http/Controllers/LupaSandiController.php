<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LupaSandiController extends Controller
{
    public function index()
    {
        return view('auth.lupa-sandi');
    }

    public function checkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan dalam sistem kami.');
        }

        // Simpan email di session
        session(['reset_email' => $user->email]);

        return redirect()->route('rubahpassword')
            ->with('success', 'Email ditemukan. Silakan atur ulang kata sandi Anda.');
    }

    public function showResetForm()
    {
        if (!session('reset_email')) {
            return redirect()->route('ForgetPassword')->with('error', 'Akses tidak sah atau sesi telah kedaluwarsa.');
        }

        return view('auth.rubah-password');
    }

    public function updatePassword(Request $request)
    {
        if (!session('reset_email')) {
            return redirect()->route('ForgetPassword')->with('error', 'Sesi tidak ditemukan. Silakan ulangi proses.');
        }

        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', session('reset_email'))->first();

        if (!$user) {
            return redirect()->route('ForgetPassword')->with('error', 'User tidak ditemukan.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        // Hapus session reset_email setelah berhasil
        $request->session()->forget('reset_email');

        return redirect()->route('login')->with('success', 'Password berhasil diubah. Silakan login dengan password baru.');
    }
}
