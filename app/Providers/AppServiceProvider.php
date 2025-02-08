<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Notifikasi;
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
        // View Composer untuk jumlah notifikasi baru
        View::composer('*', function ($view) {
            $jumlahNotifikasiBaru = 0;

            if (Auth::check()) {
                $userId = Auth::id();
                $jumlahNotifikasiBaru = Notifikasi::where('user_id', $userId)
                    ->where('is_read', false)
                    ->count();
            }

            $view->with('jumlahNotifikasiBaru', $jumlahNotifikasiBaru);
        });
    }
}