<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarLaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'laporan_kegiatan_id',
        'isi_komentar'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function laporanKegiatan()
    {
        return $this->belongsTo(LaporanKegiatan::class);
    }
}
