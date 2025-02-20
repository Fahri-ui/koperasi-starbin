<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pinjaman;

class HitungDenda extends Command
{
    protected $signature = 'hitung:denda';
    protected $description = 'Menghitung denda pinjaman yang jatuh tempo';

    public function handle()
    {
        $pinjaman = Pinjaman::where('status', 'Aktif')->get();

        foreach ($pinjaman as $p) {
            $denda = $p->hitungDenda();
            $p->update(['total_denda' => $denda]);
        }

        $this->info('Denda berhasil diperbarui.');
    }
}