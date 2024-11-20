<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'judul',
        'genre',
        'tahun_tayang',
        'durasi',
        'sinopsis',
        'poster',
        'rating_usia',
        'pemeran',
        'nama_sutradara',
    ];
}
