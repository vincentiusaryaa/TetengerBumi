<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartisipasiProgram extends Model
{
    use HasFactory;

    protected $table = 'partisipasi_programs';

    protected $fillable = [
        'user_id',
        'program_kerja_id',
        'kontribusi',
        'tanggal_partisipasi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function programKerja()
    {
        return $this->belongsTo(ProgramKerja::class);
    }
}
