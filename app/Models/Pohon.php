<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pohon extends Model
{
    use HasFactory;

    protected $fillable = [
        'lokasi_tanam_id',
        'nama_pohon',
        'jenis',
        'tinggi',
        'tanggal_tanam',
        'status'
    ];

    public function lokasiTanam()
    {
        return $this->belongsTo(LokasiTanam::class);
    }
}
