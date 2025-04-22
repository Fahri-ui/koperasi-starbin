<?php

namespace App\Console\Commands;

use App\Models\Simpanan;
use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;

class CekStatusSimpanan extends Command
{
    protected $signature = 'cek:status-simpanan';
    protected $description = 'Memeriksa status simpanan wajib user dan memperbarui status akun';

    public function handle()
    {
        $users = User::with(['simpanans' => function ($query) {
            $query->wajib()->orderBy('tanggal_transaksi', 'desc')->limit(1);
        }])->get();


        foreach ($users as $user) {
            $simpananTerakhir = Simpanan::where('user_id', $user->id)
            ->latest()
            ->first();
            // $this->info("User {$user->id} dinonaktifkan, jaminan diambil.");

            if ($simpananTerakhir) {
                $terlambatBulan = Carbon::parse($simpananTerakhir->tanggal_transaksi)->diffInMonths(now());
                if ($terlambatBulan >= 3) {
                    $user->update(['status' => 'Nonaktif']);
                    // $this->ambilJaminan($user);
                    $this->info("User {$user->fullname} dinonaktifkan, jaminan diambil.");
                } elseif ($terlambatBulan >= 2) {
                    $user->update(['status' => 'Belum_Bayar_Simpanan_Wajib']);
                    $this->info("Status user {$user->fullname} diubah ke Belum_Bayar_Simpanan_Wajib.");
                }
            }
        }
    }

    protected function ambilJaminan($user)
    {
        $pinjamanAktif = $user->pinjaman()->where('status', 'Aktif')->get();

        foreach ($pinjamanAktif as $pinjaman) {
            $pinjaman->update(['status' => 'Jaminan Diambil']);
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