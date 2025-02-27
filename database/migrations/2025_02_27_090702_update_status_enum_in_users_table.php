<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('status', ['Belum_Aktif', 'Aktif', 'Belum_Bayar_Simpanan', 'Nonaktif', 'Pending'])
                  ->default('Belum_Aktif')
                  ->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('status', ['Belum_Aktif', 'Aktif', 'Belum_Bayar_Simpanan', 'Nonaktif'])
                  ->default('Belum_Aktif')
                  ->change();
        });
    }
};

