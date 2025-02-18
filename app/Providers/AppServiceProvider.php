<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Notifikasi;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $jumlahNotifikasiBaru = 0;

            if (Auth::check()) {
                $user = Auth::user();

                if ($user->role === 'admin') {
                    // ✅ Admin hanya menerima pesan dengan user_id NULL
                    $jumlahNotifikasiBaru = Notifikasi::where('is_read', false)
                        ->whereNull('user_id') // 🔥 FIX: Pastikan ini bekerja
                        ->count();
                } else {
                    // ✅ User hanya melihat pesan dengan user_id tertentu (bukan NULL)
                    $jumlahNotifikasiBaru = Notifikasi::where(function ($query) use ($user) {
                        $query->where('user_id', $user->id) // 🔥 Notifikasi user
                            ->orWhere('user_id', 0); // 🔥 Global Message
                    })
                        ->where('is_read', false)
                        ->whereNotNull('user_id') // 🔥 FIX: Pastikan user tidak melihat pesan untuk admin
                        ->count();
                }
            }

            // Menghitung jumlah pengajuan dengan status 'Dalam Proses'
            $jumlahPengajuanDalamProses = 0;
            if (Auth::check() && Auth::user()->role === 'admin') {
                $jumlahPengajuanDalamProses = Pinjaman::where('status', 'Dalam Proses')->count();
            }

            // Membagikan jumlah notifikasi dan jumlah pengajuan ke semua view
            $view->with([
                'jumlahNotifikasiBaru' => $jumlahNotifikasiBaru,
                'jumlahPengajuanDalamProses' => $jumlahPengajuanDalamProses
            ]);
        });
    }
}
