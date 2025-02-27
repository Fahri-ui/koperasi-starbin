<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->enum('metode_pembayaran', ['cash', 'bank', 'ewallet'])->after('jenis_transaksi');
        });
    }

    public function down(): void {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->dropColumn('metode_pembayaran');
        });
    }
};
