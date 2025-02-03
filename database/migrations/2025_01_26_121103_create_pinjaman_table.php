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
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('jumlah_pinjaman', 10, 2);
            $table->decimal('sisa_angsuran', 10, 2)->nullable();
            $table->date('tanggal_pengajuan');
            $table->date('tanggal_jatuh_tempo');
            $table->string('status'); // Disetujui, Ditolak, atau Dalam Proses
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman');
    }
};
