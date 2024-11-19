<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profildesa extends Model
{
    /** @use HasFactory<\Database\Factories\ProfildesaFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_desa',
        'sejarah_desa',
        'gambar_desa',
        'visi_desa',
        'misi_desa',
        'total_jiwa',
        'total_kk',
        'total_dusun',
        'total_rt',
        'suku',
        'agama',
        'peta_desa',
        'kantor_desa',
    ];
}
