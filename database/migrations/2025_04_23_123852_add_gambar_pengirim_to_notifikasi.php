<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->string('gambar_pengirim')->nullable()->after('nama_pengirim');
        });
    }

    public function down()
    {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->dropColumn('gambar_pengirim');
        });
    }
};
