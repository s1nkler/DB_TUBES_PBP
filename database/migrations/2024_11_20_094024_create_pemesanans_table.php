<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jadwal')->constrained('jadwals');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_kursi')->constrained('kursis');
            $table->string('tanggal_pembelian');
            $table->string('metode_pembayaran');
            $table->string('total_harga');
            $table->string('status');
            $table->string('jumlah_pemesanan');
            $table->string('jenis_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
