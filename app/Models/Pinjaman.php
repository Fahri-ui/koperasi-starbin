<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pinjaman extends Model
{
    use HasFactory;

    protected $table = 'pinjaman'; // Pastikan ini sesuai dengan nama tabel di database

    protected static function boot()
    {
        parent::boot();
    
        static::updating(function ($pinjaman) {
            if ($pinjaman->isDirty('status')) { 
                $statusLama = $pinjaman->getOriginal('status');
                
                // Paksa update ke database tanpa memicu event
                Pinjaman::where('id', $pinjaman->id)->update([
                    'status_sebelumnya' => $statusLama
                ]);
            }
        });
        
        
    }     

    protected $fillable = [
        'user_id',
        'jumlah_pinjaman',
        'status',
        'status_sebelumnya', // ✅ Tambahkan ini agar bisa diisi
        'tanggal_pengajuan',
        'tanggal_jatuh_tempo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'tanggal_pinjaman' => 'datetime', // Konversi ke Carbon
    ];
}