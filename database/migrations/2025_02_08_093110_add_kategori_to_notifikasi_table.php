<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->string('kategori')->default('umum')->after('icon'); // Tambahkan kolom kategori
        });
    }

    public function down()
    {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->dropColumn('kategori'); // Hapus kolom jika rollback
        });
    }
};