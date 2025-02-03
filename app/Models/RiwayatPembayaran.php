<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPembayaran extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pembayaran'; // Nama tabel di database

    protected $fillable = [
        'pinjaman_id',
        'user_id',
        'jumlah_pembayaran',
        'metode_pembayaran',
        'bukti_pembayaran',
        'tanggal_pembayaran',
    ];

    protected $casts = [
        'tanggal_pembayaran' => 'datetime', // Konversi ke objek Carbon
    ];

    public $timestamps = false; // Nonaktifkan timestamps jika tidak ada created_at dan updated_at

    /**
     * Relasi ke model Pinjaman
     */
    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class);
    }

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
