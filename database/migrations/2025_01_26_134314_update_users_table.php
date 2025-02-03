<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom hanya jika kolom tersebut ada
            if (Schema::hasColumn('users', 'verify_key')) {
                $table->dropColumn('verify_key');
            }
            if (Schema::hasColumn('users', 'email_verified_at')) {
                $table->dropColumn('email_verified_at');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan kembali kolom jika rollback
            $table->string('verify_key')->nullable();
            $table->timestamp('email_verified_at')->nullable();
        });
    }
};
