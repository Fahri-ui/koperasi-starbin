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
        $totalSimpananWajib = $simpananWajib->where('status', 'Berhasil')->sum('jumlah');

        return view('admin.simpanan-wajib-admin', compact('simpananWajib', 'totalSimpananWajib'));
    }
    public function destroy($id)
    {
        $simpanan = Simpanan::findOrFail($id);
        $simpanan->delete();
    
        return redirect()->back()->with('success', 'Data simpanan berhasil dihapus.');
    }   
}
