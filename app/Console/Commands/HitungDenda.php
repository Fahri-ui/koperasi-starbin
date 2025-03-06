<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pinjaman;
use App\Models\Simpanan;
use App\Models\User;
use Carbon\Carbon;

class HitungDenda extends Command
{
    protected $signature = 'hitung:denda';
    protected $description = 'Menghitung denda pinjaman dan memperbarui status user berdasarkan pembayaran simpanan wajib';

    public function handle()
    {
        $pinjaman = Pinjaman::where('status', 'Aktif')->get();

        foreach ($pinjaman as $p) {
            $denda = $p->hitungDenda();
            $p->update(['total_denda' => $denda]);
        }

        // Cek user Nonaktif dan ambil jaminan
        $usersNonaktif = User::where('status', 'Nonaktif')->get();

        foreach ($usersNonaktif as $user) {
            $this->ambilJaminan($user);
        }

        $this->info('Denda berhasil diperbarui dan jaminan diambil untuk user Nonaktif.');
        $this->info('Status user berhasil diperbarui untuk simpanan wajib.');
    }

    protected function hitungDendaPinjaman()
    {
        $pinjaman = Pinjaman::where('status', 'Aktif')->get();

        foreach ($pinjaman as $p) {
            $denda = $p->hitungDenda();
            $p->update(['total_denda' => $denda]);
        }
    }

    protected function cekStatusSimpananWajib()
    {
        $users = User::with(['simpanans' => function ($query) {
            $query->wajib()->orderBy('tanggal_transaksi', 'desc')->limit(1);
        }])->get();

        foreach ($users as $user) {
            $simpananTerakhir = $user->simpanans->first();

            if ($simpananTerakhir) {
                $terlambatBulan = Carbon::parse($simpananTerakhir->tanggal_transaksi)->diffInMonths(now());

                if ($terlambatBulan >= 3) {
                    // Nonaktifkan akun dan ambil jaminan pinjaman jika ada
                    $user->update(['status' => 'Nonaktif']);
                    $this->ambilJaminan($user);
                } elseif ($terlambatBulan >= 2) {
                    // Ubah status jadi Belum_Bayar_Simpanan_Wajib
                    $user->update(['status' => 'Belum_Bayar_Simpanan_Wajib']);
                }
            }
        }
    }

    protected function ambilJaminan($user)
    {
        $pinjamanAktif = $user->pinjaman()->where('status', 'Aktif')->get();

        foreach ($pinjamanAktif as $pinjaman) {
            // Simulasi tindakan mengambil jaminan
            $pinjaman->update(['status' => 'Jaminan Diambil']);
            // Buat notifikasi untuk user
            $user->notifikasi()->create([
                'message' => 'Jaminan Anda telah diambil karena status akun menjadi Nonaktif.',
                'type' => 'danger',
                'icon' => 'shield-slash',
                'user_id' => null,
                'expired_at' => now()->addDays(7),
            ]);
        }
    }
}
