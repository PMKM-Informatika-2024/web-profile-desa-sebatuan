<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    /** @use HasFactory<\Database\Factories\PengumumanFactory> */
    use HasFactory;

    protected $table = 'pengumuman'; // Nama tabel sebenarnya di database Anda
    
    protected $fillable = [
        'judul',
        'deskripsi_singkat',
        'gambar_pengumuman',
    ];
    
}
