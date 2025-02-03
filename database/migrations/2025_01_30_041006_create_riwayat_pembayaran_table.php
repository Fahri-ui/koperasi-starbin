<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('riwayat_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pinjaman_id')->constrained('pinjaman')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('jumlah_pembayaran', 10, 2);
            $table->string('metode_pembayaran');
            $table->string('bukti_pembayaran');
            $table->dateTime('tanggal_pembayaran');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('riwayat_pembayaran');
    }
};