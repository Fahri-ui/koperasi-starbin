<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Simpanan;
use Carbon\Carbon;


use Illuminate\Http\Request;

class SimpananSukarelaAdminController extends Controller
{
    public function simpanansukarelaadmin()
    {
        // Ambil semua simpanan dengan jenis 'sukarela'
        $simpananSukarela = Simpanan::where('jenis', 'sukarela')->get();
    
        // Hitung total simpanan sukarela
        $totalSimpananSukarela = $simpananSukarela->sum('jumlah');
    
        return view('admin.simpanan-sukarela-admin', compact('simpananSukarela', 'totalSimpananSukarela'));
    }    
}
