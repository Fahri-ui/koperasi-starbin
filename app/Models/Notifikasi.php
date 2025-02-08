<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasi';

    protected $fillable = [
        'user_id',
        'message',
        'type',
        'icon',
        'is_read',
        'expired_at',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
