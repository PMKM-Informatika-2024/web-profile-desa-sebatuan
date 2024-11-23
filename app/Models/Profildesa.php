<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profildesa extends Model
{
    /** @use HasFactory<\Database\Factories\ProfildesaFactory> */
    use HasFactory;

    protected $guarded = [
        'id','created_at','updated_at'
    ];
}
