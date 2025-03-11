<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // Misalnya: 'alamat', 'telepon', 'email'
            $table->string('title'); // Judul untuk tampilan, misalnya "Alamat"
            $table->string('icon'); // Ikon yang digunakan, misalnya "bi bi-geo-alt"
            $table->string('value'); // Nilai kontak, misalnya alamat, nomor telepon, atau email
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
