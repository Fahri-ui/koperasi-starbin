<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('riwayat_pembayaran', function (Blueprint $table) {
            $table->string('status')->after('tanggal_pembayaran')->default('Dalam Proses');
        });
    }
    
    public function down()
    {
        Schema::table('riwayat_pembayaran', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
