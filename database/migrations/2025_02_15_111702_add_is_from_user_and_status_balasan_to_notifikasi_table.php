<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->boolean('is_from_user')->default(false)->after('user_id');
            $table->enum('status_balasan', ['pending', 'dibalas'])->default('pending')->after('is_from_user');
        });
    }

    public function down(): void
    {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->dropColumn(['is_from_user', 'status_balasan']);
        });
    }
};
