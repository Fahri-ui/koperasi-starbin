<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\User;
use Carbon\Carbon;

class DataPengajuanController extends Controller
{
    public function pangajuan()
    {
        $pengajuan = Pinjaman::with('user')
            ->where(function ($query) {
                $query->where('status', 'Dalam Proses')
                    ->orWhere(function ($q) {
                        $q->whereIn('status', ['Aktif', 'Ditolak'])
                            ->whereDate('updated_at', Carbon::today());
                    });
            })
            ->get();

        return view('admin.data-pengajuan', compact('pengajuan'));
    }

    public function update(Request $request, $id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $statusBaru = $request->status;

        if ($statusBaru === 'Aktif') {
            $pinjaman->update([
                'status' => 'Aktif',
                'total_denda' => 0.00,       // ✅ Ubah ke 0.00
                'status_denda' => 'Belum Lunas', // ✅ Ubah ke 'Belum Lunas'
            ]);
        } elseif ($statusBaru === 'Ditolak') {
            $pinjaman->update([
                'status' => 'Ditolak',
                'total_denda' => null,  // ✅ Tetap NULL
                'status_denda' => null, // ✅ Tetap NULL
            ]);
        } else {
            $pinjaman->update(['status' => $statusBaru]);
        }

        return response()->json(['success' => true]);
    }
}
