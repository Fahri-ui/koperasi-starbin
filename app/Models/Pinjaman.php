<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pinjaman extends Model {
    use HasFactory;

    protected $table = 'pinjaman'; // Pastikan ini sesuai dengan nama tabel di database

    protected $fillable = [
        'user_id',
        'jumlah_pinjaman',
        'status',
        'tanggal_pengajuan',
        'tanggal_jatuh_tempo',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'tanggal_pinjaman' => 'datetime', // Konversi ke Carbon
    ];
    
}