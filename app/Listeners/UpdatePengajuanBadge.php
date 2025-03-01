<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Cache;
use App\Models\Pinjaman;
use App\Models\Simpanan;

class UpdatePengajuanBadge
{
    public function handle(Login $event)
    {
        $user = $event->user;

        if ($user->role === 'admin') {
            // Update cache saat admin login
            Cache::forget('jumlahPengajuanDalamProses');
            Cache::forget('jumlahSimpananDalamProses');

            Cache::remember('jumlahPengajuanDalamProses', now()->addMinutes(10), function () {
                return Pinjaman::where('status', 'Dalam Proses')->count();
            });

            Cache::remember('jumlahSimpananDalamProses', now()->addMinutes(10), function () {
                return Simpanan::where('status', 'Dalam Proses')->count();
            });
        }
    }

    protected $listen = [
        \Illuminate\Auth\Events\Login::class => [
            \App\Listeners\UpdatePengajuanBadge::class,
        ],
    ];
    
}
