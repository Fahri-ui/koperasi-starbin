<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pinjaman extends Model
{
    use HasFactory;

    protected $table = 'pinjaman'; 

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($pinjaman) {
            if ($pinjaman->isDirty('status')) {
                $statusLama = $pinjaman->getOriginal('status');

                Pinjaman::where('id', $pinjaman->id)->update([
                    'status_sebelumnya' => $statusLama
                ]);
            }
        });
    }

    public function riwayatPembayaran()
    {
        return $this->hasMany(RiwayatPembayaran::class, 'pinjaman_id');
    }

    public function hitungDenda()
    {
        if ($this->status !== 'Aktif') {
            return 0; 
        }

        $tanggalJatuhTempo = Carbon::parse($this->tanggal_jatuh_tempo);
        $hariTerlambat = now()->diffInDays($tanggalJatuhTempo, false);

        if ($hariTerlambat <= 0) {
            return 0; // Belum jatuh tempo
        }

        $mingguTerlambat = ceil($hariTerlambat / 7);
        $denda = ($this->jumlah_pinjaman * 0.02) * $mingguTerlambat;

        // Update total_denda & status_denda secara otomatis
        $this->total_denda = $denda;
        $this->status_denda = $denda > 0 ? 'Belum Lunas' : 'Lunas';
        $this->save();

        return $denda;
    }

    protected $fillable = [
        'user_id',
        'jumlah_pinjaman',
        'status',
        'status_sebelumnya', // ✅ Tambahkan ini agar bisa diisi
        'sisa_angsuran',
        'alasan', // Pastikan ini ada
        'tanggal_pengajuan',
        'tanggal_jatuh_tempo',
        'total_denda',
        'status_denda',
        'jenis_jaminan',      // Kolom baru untuk jenis jaminan
        'file_jaminan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'tanggal_pinjaman' => 'datetime', // Konversi ke Carbon
    ];

    public function adaPinjamanAktif()
    {
        return $this->where('user_id', $this->user_id)
            ->where('status', 'Aktif')
            ->exists();
    }
}
