<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'id_film',
        'jam_tayang',
        'tanggal_tayang',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }
}
