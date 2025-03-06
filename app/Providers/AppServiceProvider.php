<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Notifikasi;
use App\Models\Pinjaman;
use App\Models\Simpanan;
use App\Models\RiwayatPembayaran;
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
            $jumlahPengajuanDalamProses = 0; // Inisialisasi default
            $jumlahSimpananDalamProses = 0;  // Inisialisasi default
            $jumlahAngsuranDalamProses = 0;   // Tambahkan ini

            if (Auth::check()) {
                $user = Auth::user();

                if ($user->role === 'admin') {
                    // ✅ Admin hanya menerima pesan dengan user_id NULL
                    $jumlahNotifikasiBaru = Notifikasi::where('is_read', false)
                        ->whereNull('user_id')
                        ->count();

                    // Hitung pengajuan pinjaman dalam proses
                    $jumlahPengajuanDalamProses = Pinjaman::where('status', 'Dalam Proses')->count();

                    // Hitung simpanan dalam proses
                    $jumlahSimpananDalamProses = Simpanan::where('status', 'Dalam Proses')->count();

                    // Hitung angsuran dalam proses
                    $jumlahAngsuranDalamProses = RiwayatPembayaran::where('status', 'Dalam Proses')->count();
                } else {
                    // ✅ User hanya melihat pesan dengan user_id tertentu (bukan NULL)
                    $jumlahNotifikasiBaru = Notifikasi::where(function ($query) use ($user) {
                        $query->where('user_id', $user->id)
                            ->orWhere('user_id', 0);
                    })
                        ->where('is_read', false)
                        ->whereNotNull('user_id')
                        ->count();
                }
            }

            // Membagikan jumlah notifikasi dan jumlah pengajuan ke semua view
            $view->with([
                'jumlahNotifikasiBaru' => $jumlahNotifikasiBaru,
                'jumlahPengajuanDalamProses' => $jumlahPengajuanDalamProses,
                'jumlahSimpananDalamProses' => $jumlahSimpananDalamProses,
                'jumlahAngsuranDalamProses' => $jumlahAngsuranDalamProses,  // Bagikan ini
            ]);
        });
    }
}
