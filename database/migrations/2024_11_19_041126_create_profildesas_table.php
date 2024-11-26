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
            $table->integer('total_laki_laki');
            $table->integer('total_perempuan');

            // Suku
            $table->integer('total_melayu');
            $table->integer('total_madura');
            $table->integer('total_tionghoa');
            $table->integer('total_dayak');
            $table->integer('total_jawa');
            $table->integer('total_bugis');
            $table->integer('total_suku_lainnya');

            // Agama
            $table->integer('total_islam');
            $table->integer('total_katolik');
            $table->integer('total_protestan');
            $table->integer('total_buddha');
            $table->integer('total_hindu');
            $table->integer('total_konghuchu');

            // Pendidikan
            $table->integer('total_belum_sekolah');
            $table->integer('total_tamat_SD');
            $table->integer('total_tamat_SMP');
            $table->integer('total_tamat_SMA');
            $table->integer('total_diploma1');
            $table->integer('total_diploma2');
            $table->integer('total_diploma3');
            $table->integer('total_sarjana1');
            $table->integer('total_sarjana2');
            $table->integer('total_sarjana3');

            // Pekerjaan
            $table->integer('total_petani_pekebun');
            $table->integer('total_buruhTani');
            $table->integer('total_swasta');
            $table->integer('total_pns');
            $table->integer('total_pedagang');
            $table->integer('total_pengrajin');
            $table->integer('total_peternak');
            $table->integer('total_nelayan');
            $table->integer('total_lainlain');

            // Informasi Desa 
            $table->string('batas_utara');
            $table->string('batas_selatan');
            $table->string('batas_barat');
            $table->string('batas_timur');

            // Statistik Desa
            $table->integer('luas_desa');
            $table->integer('jumlah_dusun');
            $table->integer('jumlah_rt');
            $table->integer('jumlah_rw');

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
