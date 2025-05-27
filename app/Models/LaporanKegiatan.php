<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_kerja_id',
        'judul',
        'deskripsi',
        'tanggal_kegiatan',
        'lokasi',
        'dokumentasi_url'
    ];

    public function programKerja()
    {
        return $this->belongsTo(ProgramKerja::class);
    }
}
