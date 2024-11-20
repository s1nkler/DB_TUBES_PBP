<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    protected $fillable = [
        'id_studio',
        'status',
        'nomor_kursi',
    ];

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'id_studio');
    }
}
