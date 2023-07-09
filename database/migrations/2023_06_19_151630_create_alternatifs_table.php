<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->string('alternatif');
            $table->double('prestasi_prodi');
            $table->double('biaya_kuliah');
            $table->double('mutu_tenaga_pendidik');
            $table->double('akreditasi_prodi');
            $table->double('fasilitas');
            $table->double('presentase_lulusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
