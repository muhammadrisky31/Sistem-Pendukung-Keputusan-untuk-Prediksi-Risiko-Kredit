<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prediksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->integer('umur');
            $table->decimal('pendapatan', 15, 2);
            $table->string('status_rumah');
            $table->integer('lama_kerja');
            $table->string('tujuan');
            $table->string('grade');
            $table->decimal('jumlah_pinjaman', 15, 2);
            $table->decimal('suku_bunga', 5, 2);
            $table->string('status_pinjaman');
            $table->decimal('rasio_pinjaman', 8, 2);
            $table->tinyInteger('default_kredit');
            $table->integer('lama_riwayat');
            $table->string('hasil');
            $table->decimal('confidence', 5, 2);
            $table->string('riwayat_default');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prediksis');
    }
};