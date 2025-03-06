<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\DB;


class Kernel extends ConsoleKernel
{

    protected function schedule(Schedule $schedule)
    {
        // Hapus notifikasi yang sudah expired setiap hari
        $schedule->call(function () {
            Notifikasi::where('expired_at', '<', now())->delete();
        })->daily();

        // Hitung denda otomatis setiap hari
        $schedule->command('hitung:denda')->daily();

        // Cek status simpanan wajib setiap awal bulan
        $schedule->command('cek:status-simpanan')->monthlyOn(1, '00:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
