<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiTanam extends Model
{
    use HasFactory;

    protected $table = 'lokasi_tanams';

    protected $fillable = [
        'program_kerja_id',
        'nama_tempat',
        'deskripsi',
        'latitude',
        'longitude',
        'status'
    ];

    public function programKerja()
    {
        return $this->belongsTo(ProgramKerja::class);
    }
}
