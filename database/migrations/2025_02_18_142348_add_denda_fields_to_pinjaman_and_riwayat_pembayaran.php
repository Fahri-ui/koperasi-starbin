<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->decimal('total_denda', 15, 2)->default(0)->after('jumlah_pinjaman');
            $table->enum('status_denda', ['Belum Lunas', 'Lunas'])->default('Belum Lunas')->after('total_denda');
        });

        Schema::table('riwayat_pembayaran', function (Blueprint $table) {
            $table->enum('jenis_pembayaran', ['Angsuran', 'Denda', 'Keduanya'])->after('jumlah_pembayaran');
            $table->decimal('jumlah_denda_dibayar', 15, 2)->default(0)->after('jenis_pembayaran');
        });
    }

    public function down(): void
    {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->dropColumn(['total_denda', 'status_denda']);
        });

        Schema::table('riwayat_pembayaran', function (Blueprint $table) {
            $table->dropColumn(['jenis_pembayaran', 'jumlah_denda_dibayar']);
        });
    }
};