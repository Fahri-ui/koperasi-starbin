<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->string('status_denda')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('pinjaman', function (Blueprint $table) {
            $table->string('status_denda')->default('Belum Lunas')->change();
        });
    }
};
