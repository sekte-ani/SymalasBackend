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
        Schema::create('verify_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 20);
            $table->string('kd_matkul', 20);
            $table->enum('status', [0, 1])->default(0);
            $table->timestamps();
            
            $table->foreign('npm')->references('npm')->on('mahasiswas');
            $table->foreign('kd_matkul')->references('kd_matkul')->on('matkuls');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verify_tugas');
    }
};
