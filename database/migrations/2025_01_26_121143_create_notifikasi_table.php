<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->string('message')->after('user_id');
            $table->string('type')->after('message');
            $table->string('icon')->nullable()->after('type');
            $table->boolean('is_read')->default(false)->after('icon');
            $table->timestamp('expired_at')->nullable()->after('updated_at');

            // Tambahkan foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::table('notifikasi', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id', 'message', 'type', 'icon', 'is_read', 'expired_at']);
        });
    }
};