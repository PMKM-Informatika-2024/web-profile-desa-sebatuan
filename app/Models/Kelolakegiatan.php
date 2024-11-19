<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelolakegiatan extends Model
{
    /** @use HasFactory<\Database\Factories\KelolakegiatanFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan',
        'gambar_kegiatan',
    ];
}
