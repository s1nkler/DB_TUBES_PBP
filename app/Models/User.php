<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'email',
        'password',
        'nama_lengkap',
        'foto_profil',
        'no_hp',
        'tanggal_terdaftar',
        //'role',
    ];
}
