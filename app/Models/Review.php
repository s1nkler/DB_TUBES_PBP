<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id_film',
        'rating',
        'review',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }
}
