<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\User;
use Carbon\Carbon;

class PengajuanSimmpanansController extends Controller
{
    public function simpanans()
    {
        $pengajuanSimpanans = Simpanan::with('user')
            ->where(function ($query) {
                $query->where('status', 'Dalam Proses')
                    ->orWhere(function ($q) {
                        $q->whereIn('status', ['Berhasil', 'Ditolak'])
                            ->whereDate('updated_at', Carbon::today());
                    });
            })
            ->get();

        $totalPengajuan = $pengajuanSimpanans->count();
        $menunggu = $pengajuanSimpanans->where('status', 'Dalam Proses')->count();
        $disetujui = $pengajuanSimpanans->where('status', 'Berhasil')->count();
        $ditolak = $pengajuanSimpanans->where('status', 'Ditolak')->count();

        return view('admin.pengajuan-simpanans', compact(
            'pengajuanSimpanans',
            'totalPengajuan',
            'menunggu',
            'disetujui',
            'ditolak'
        ));
    }

    public function updateStatus(Request $request, $id)
    {

        $simpanan = Simpanan::findOrFail($id);
        $user = User::find($simpanan->user_id);

        if ($request->action === 'approve') {
            $simpanan->status = 'Berhasil';

            if ($simpanan->jenis === 'anggota') {
                $user->status = 'Aktif';
            } elseif ($simpanan->jenis === 'wajib') {
                $hasArrears = $this->checkWajibArrears($user->id);
                $user->status = $hasArrears ? 'Belum_Bayar_Simpanan_Wajib' : 'Aktif';
            } elseif ($simpanan->jenis === 'sukarela') {
                $message = 'Simpanan sukarela telah disetujui.';
            }

            $message = $message ?? 'Pengajuan berhasil disetujui.';
        } elseif ($request->action === 'reject') {
            $simpanan->status = 'Ditolak';

            if ($simpanan->jenis === 'anggota') {
                $user->status = 'Ditolak';
                $user->save(); // Tambahkan ini untuk menyimpan perubahan

            } elseif ($simpanan->jenis === 'wajib') {
                // Kalau simpanan wajib ditolak, status tetap 'Belum_Bayar_Simpanan_Wajib'
                $message = 'Simpanan wajib telah ditolak.';
            } elseif ($simpanan->jenis === 'sukarela') {
                // Kalau sukarela ditolak, nggak perlu ubah status user
                $message = 'Simpanan sukarela telah ditolak.';
            }

            $message = $message ?? 'Pengajuan telah ditolak.';
        } else {
            return redirect()->back()->with('error', 'Aksi tidak valid!');
        }

        $simpanan->save();
        $user->save();

        return redirect()->route('simpanans')->with('success', $message);
    }

    private function checkWajibArrears($userId)
    {
        $latestWajib = Simpanan::where('user_id', $userId)
            ->where('jenis', 'wajib')
            ->orderBy('tanggal_transaksi', 'desc')
            ->first();

        if (!$latestWajib) return true;

        $lastPaymentDate = \Carbon\Carbon::parse($latestWajib->tanggal_transaksi);
        $monthsSinceLastPayment = now()->diffInMonths($lastPaymentDate);

        return $monthsSinceLastPayment >= 2;
    }
}
