<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->enum('jenis_transaksi', ['penyetoran', 'penarikan'])->after('jumlah');
        });
    }
    
    public function down()
    {
        Schema::table('simpanans', function (Blueprint $table) {
            $table->dropColumn('jenis_transaksi');
        });
    }    
};
