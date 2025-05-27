<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pohons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lokasi_tanam_id')->constrained('lokasi_tanams')->onDelete('cascade');
            $table->string('nama_pohon');
            $table->string('jenis')->nullable();
            $table->decimal('tinggi', 5, 2)->nullable();
            $table->date('tanggal_tanam');
            $table->enum('status', ['hidup', 'mati'])->default('hidup');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pohons');
    }
};
