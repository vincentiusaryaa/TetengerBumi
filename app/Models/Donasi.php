<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jumlah',
        'metode_pembayaran',
        'tanggal_donasi',
        'catatan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
