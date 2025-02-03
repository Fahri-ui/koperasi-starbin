<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('simpanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID pengguna
            $table->enum('jenis', ['wajib', 'sukarela']); // Jenis simpanan
            $table->decimal('jumlah', 15, 2); // Jumlah simpanan
            $table->string('kode_transaksi')->unique(); // Kode unik untuk transaksi
            $table->timestamps();

            // Relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('simpanans');
    }
};
    
