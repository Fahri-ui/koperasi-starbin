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
}
