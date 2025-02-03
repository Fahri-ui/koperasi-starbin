<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->string('status')->default('pending'); // Menambahkan kolom status dengan default 'pending'
            $table->timestamp('tanggal_transaksi')->nullable(); // Menambahkan kolom tanggal_transaksi yang dapat null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->dropColumn(['status', 'tanggal_transaksi']); // Menghapus kolom saat rollback
        });
    }
};
