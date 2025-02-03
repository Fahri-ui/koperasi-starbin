<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Simpanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jenis',
        'jumlah',
        'jenis_transaksi',
        'kode_transaksi',
        'status', 
        'tanggal_transaksi',
    ];

    protected $dates = ['tanggal_transaksi']; // Tambahkan ini juga

    protected $casts = [
        'tanggal_transaksi' => 'datetime', // Konversi ke Carbon
    ];

    // Relasi: Simpanan milik User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Scope: Filter data simpanan wajib
    public function scopeWajib($query)
    {
        return $query->where('jenis', 'wajib');
    }

    // Scope: Filter data simpanan sukarela
    public function scopeSukarela($query)
    {
        return $query->where('jenis', 'sukarela');
    }
}
