<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Simpanan; // Pastikan model Simpanan sudah dibuat
use Illuminate\Http\Request;
use Carbon\Carbon;

class SimpananWajibAdminController extends Controller
{
    public function simpananwajibadmin()
    {
        // Ambil semua simpanan dengan jenis 'wajib'
        $simpananWajib = Simpanan::where('jenis', 'wajib')->get();
    
        // Hitung total simpanan wajib
        $totalSimpananWajib = $simpananWajib->sum('jumlah');
    
        return view('admin.simpanan-wajib-admin', compact('simpananWajib', 'totalSimpananWajib'));
    }
}
