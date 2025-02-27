<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->enum('jenis', ['wajib', 'sukarela', 'anggota'])->change();
        });
    }

    public function down(): void {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->enum('jenis', ['wajib', 'sukarela'])->change();
        });
    }
};
