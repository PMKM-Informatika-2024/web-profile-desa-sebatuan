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
        Schema::create('profildesas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_desa');
            $table->string('sejarah_desa');
            $table->string('gambar_desa');
            $table->string('visi_desa');
            $table->string('misi_desa');
            $table->integer('total_jiwa');
            $table->integer('total_kk');
            $table->integer('total_dusun');
            $table->integer('total_rt');
            $table->string('suku');
            $table->string('agama');
            $table->string('peta_desa'); 
            $table->string('kantor_desa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profildesas');
    }
};
