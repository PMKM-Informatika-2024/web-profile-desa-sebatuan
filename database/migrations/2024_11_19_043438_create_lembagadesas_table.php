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
        Schema::create('lembagadesas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_lembaga');
            $table->string('alamat_lembaga');
            $table->string('nama_ketua');
            $table->string('gambar_lembaga');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembagadesas');
    }
};
