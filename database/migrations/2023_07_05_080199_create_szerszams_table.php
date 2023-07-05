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
        Schema::create('szerszams', function (Blueprint $table) {
            $table->id('szerszam_azon');
            $table->foreignId('marka')->references('marka_azon')->on('markas');
            $table->foreignId('kategoria')->references('kateg_azon')->on('kategorias');
            $table->foreignId('tulajdonos')->references('felhasz_azon')->on('users');
            $table->integer('teljesitmeny');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szerszams');
    }
};
