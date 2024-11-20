<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
        'id_jadwal',
        'id_user',
        'id_kursi',
        'tanggal_pembelian',
        'metode_pembayaran',
        'total_harga',
        'status',
        'jumlah_pemesanan',
        'jenis_pembayaran',
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kursi()
    {
        return $this->belongsTo(Kursi::class, 'id_kursi');
    }
}
