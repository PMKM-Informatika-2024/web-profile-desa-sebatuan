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
        Schema::create('kelolakegiatans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_kegiatan');
            $table->string('gambar_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelolakegiatans');
    }
};
