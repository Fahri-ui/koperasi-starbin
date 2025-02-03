<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migration.
     */
    public function up(): void {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->date('tanggal_pinjaman')->nullable()->after('jumlah_pinjaman'); 
            // `after('jumlah_pinjaman')` agar kolom ini muncul setelah jumlah_pinjaman
        });
    }

    /**
     * Rollback migration.
     */
    public function down(): void {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->dropColumn('tanggal_pinjaman');
        });
    }
};
