<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->string('jenis_jaminan')->nullable()->after('alasan');
            $table->string('file_jaminan')->nullable()->after('jenis_jaminan');
        });
    }

    public function down(): void
    {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->dropColumn(['jenis_jaminan', 'file_jaminan']);
        });
    }
};
