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
        Schema::create('matkuls', function (Blueprint $table) {
            $table->string('kd_matkul', 20)->primary();
            $table->string('nama_matkul', 50);
            $table->string('nip', 20);
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkuls');
    }
};
