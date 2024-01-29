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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string('kd_matkul', 20);
            $table->string('judul', 255);
            $table->text('deskripsi');
            $table->text('tautan');
            $table->string('file', 255)->nullable();
            $table->date('dl_tgl');
            $table->time('dl_jam');
            $table->timestamps();

            $table->foreign('kd_matkul')->references('kd_matkul')->on('matkuls');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
