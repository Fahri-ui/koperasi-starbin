<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPembayaran;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BuktiPembayaranController extends Controller
{
    public function show($bukti)
    {
        // Path lengkap ke file di public/
        $filePath = 'picture/bukti_pembayaran/' . $bukti;

        // Jika file tidak ada, tampilkan 404
        if (!file_exists(public_path($filePath))) {
            abort(404, 'File tidak ditemukan.');
        }

        // Kembalikan view dengan mengirimkan path bukti pembayaran
        return view('bukti_pembayaran_pinjaman.user', ['buktiFile' => asset($filePath)]);
    }

    public function showAdmin($bukti)
    {
        // Path lengkap ke file di public/
        $filePath = 'picture/bukti_pembayaran/' . $bukti;

        // Jika file tidak ada, tampilkan 404
        if (!file_exists(public_path($filePath))) {
            abort(404, 'File tidak ditemukan.');
        }

        // Kembalikan view khusus admin dengan mengirimkan path bukti pembayaran
        return view('bukti_pembayaran_pinjaman.admin', ['buktiFile' => asset($filePath)]);
    }

    public function showJaminan($bukti)
    {
        $filePath = 'picture/jaminan_pembayaran/' . $bukti;

        if (!file_exists(public_path($filePath))) {
            abort(404, 'File tidak ditemukan.');
        }

        // Kirim path gambar ke view
        return view('bukti_jaminan.user', ['buktiFile' => asset($filePath)]);
    }

    public function showJaminanadmin($bukti)
    {
        $filePath = 'picture/jaminan_pembayaran/' . $bukti;

        if (!file_exists(public_path($filePath))) {
            abort(404, 'File tidak ditemukan.');
        }

        // Kirim path gambar ke view
        return view('bukti_jaminan.admin', ['buktiFile' => asset($filePath)]);
    }
}
