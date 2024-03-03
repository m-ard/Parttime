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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id('id_lamaran', 6);
            $table->unsignedBigInteger('id_pengguna')->unique();
            $table->foreign('id_pengguna')->references('id')->on('users');
            $table->unsignedBigInteger('id_lowongan_pekerjaan')->unique()->index();
            $table->foreign('id_lowongan_pekerjaan')->references('id_lowongan_pekerjaan')->on('vacancies');
            $table->string('status', 50);
            $table->string('keterangan', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
