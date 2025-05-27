<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lampiran_dokumentasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laporan_kegiatan_id')->constrained('laporan_kegiatans')->onDelete('cascade');
            $table->string('nama_file');
            $table->string('path');
            $table->string('tipe_file');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lampiran_dokumentasis');
    }
};
