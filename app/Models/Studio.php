<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = [
        'jumlah_kursi',
        'jenis_studio',
    ];
}
