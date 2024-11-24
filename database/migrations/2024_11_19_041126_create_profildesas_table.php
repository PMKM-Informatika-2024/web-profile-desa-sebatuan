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
            $table->text('sejarah_desa');
            $table->string('gambar_profiledesa');
            $table->text('visi_desa');
            $table->text('misi_desa');
            $table->integer('total_jiwa');
            $table->integer('total_kk');
            $table->integer('total_dusun');
            $table->integer('total_rt');
            $table->integer('total_melayu');
            $table->integer('total_madura');
            $table->integer('total_tionghoa');
            $table->integer('total_dayak');
            $table->integer('total_jawa');
            $table->integer('total_bugis');
            $table->integer('total_suku_lainnya');
            $table->integer('total_islam');
            $table->integer('total_katolik');
            $table->integer('total_protestan');
            $table->integer('total_buddha');
            $table->integer('total_hindu');
            $table->integer('total_konghuchu');
            $table->text('peta_desa');
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
