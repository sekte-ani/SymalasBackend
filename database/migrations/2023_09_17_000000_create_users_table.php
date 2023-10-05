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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 20);
            $table->string('password', 255);
            $table->enum('role', ['admin','member', 'dosen'])->default('member');
            $table->rememberToken();
            $table->timestamps();

            // $table->index('username');
            // $table->foreign('username')->references('nip')->on('dosens');
            // $table->foreign('username')->references('npm')->on('mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
