<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'phone',
        'address',
        'gambar',
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function simpanans()
    {
        return $this->hasMany(Simpanan::class, 'user_id', 'id');
    }
    
    public function pinjaman()
    {
        return $this->hasMany(Pinjaman::class, 'user_id', 'id');
    }

    public function cekStatusSimpananWajib()
    {
        $terakhirBayar = $this->simpanans()
            ->wajib()
            ->orderBy('tanggal_transaksi', 'desc')
            ->first();

        if (!$terakhirBayar) {
            return 'Belum Bayar Sama Sekali';
        }

        $selisihBulan = now()->diffInMonths($terakhirBayar->tanggal_transaksi);

        if ($selisihBulan >= 3) {
            return 'Nonaktif';
        } elseif ($selisihBulan >= 2) {
            return 'Belum_Bayar_Simpanan_Wajib';
        }

        return 'Aktif';
    }
}
