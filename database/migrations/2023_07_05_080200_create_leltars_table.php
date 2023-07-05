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
        Schema::create('leltars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('felhasznalo')->references('felhasz_azon')->on('users');
            $table->foreignId('szerszam')->references('szerszam_azon')->on('szerszams');
            $table->integer('darab');
            $table->date('leltarIdopont');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leltars');
    }
};
