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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id('id_lowongan_pekerjaan',6);
            $table->unsignedBigInteger('id_perusahaan')->unique()->index();
            $table->foreign('id_perusahaan')->references('id_perusahaan')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->string('posisi', 30);
            $table->integer('gaji', 20)->change();
            $table->string('lokasi', 20);
            $table->string('kategori', 20);
            $table->string('tipe', 20);
            $table->string('penempatan', 30);
            $table->string('pendidikan', 30);
            $table->integer('usia', 3)->change();
            $table->string('jenis_kelamin', 15);
            $table->string('pengalaman', 50);
            $table->string('deskripsi', 500);
            $table->string('hari_kerja', 20);
            $table->string('jam_kerja', 20);
            $table->date('tanggal_buka');
            $table->date('tanggal_tutup');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
