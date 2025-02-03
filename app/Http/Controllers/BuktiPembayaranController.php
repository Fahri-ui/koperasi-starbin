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
        return view('bukti_pembayaran_pinjaman.bukti', ['buktiFile' => asset($filePath)]);
    }        
}
