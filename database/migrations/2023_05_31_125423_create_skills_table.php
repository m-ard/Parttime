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
        Schema::create('skills', function (Blueprint $table) {
            $table->id('id_skill', 4);
            $table->unsignedBigInteger('id')->unique()->index();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jenis', 15);
            $table->string('keterangan', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
