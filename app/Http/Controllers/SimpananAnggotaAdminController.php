<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Simpanan;
use Carbon\Carbon;


use Illuminate\Http\Request;

class SimpananAnggotaAdminController extends Controller
{
    public function simpanananggota()
    {
        // Ambil semua simpanan dengan jenis 'sukarela'
        $simpanananggota = Simpanan::where('jenis', 'anggota')->get();
    
        // Hitung total simpanan sukarela
        $totalSimpanananggota = $simpanananggota->sum('jumlah');
    
        return view('admin.simpanan-anggota-admin', compact('simpanananggota', 'totalSimpanananggota'));
    }    
}
