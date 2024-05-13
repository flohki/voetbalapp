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
        Schema::create('rankings', function (Blueprint $table) {
            $table->id();
            $table->string('ploegnaam');
            $table->integer('aantal_matchen_gespeeld')->default(0);
            $table->integer('gewonnen')->default(0);
            $table->integer('verloren')->default(0);
            $table->integer('gelijkspel')->default(0);
            $table->integer('doelpunten_voor')->default(0);
            $table->integer('doelpunten_tegen')->default(0);
            $table->integer('doelpunten_verschil')->default(0);
            $table->integer('punten_behaald')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rankings');
    }
};