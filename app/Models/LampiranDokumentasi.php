<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranDokumentasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'laporan_kegiatan_id',
        'nama_file',
        'path',
        'tipe_file'
    ];

    public function laporanKegiatan()
    {
        return $this->belongsTo(LaporanKegiatan::class);
    }
}
