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
        $pinjaman->status = $request->status;
        $pinjaman->save();
    
        return response()->json(['success' => true]);
    }
    
}
