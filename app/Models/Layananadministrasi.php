<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layananadministrasi extends Model
{
    /** @use HasFactory<\Database\Factories\LayananadministrasiFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'persyaratan',
    ];
}
