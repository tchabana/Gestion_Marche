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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->boolean('estdispo')->default('true');
            $table->timestamps();
            
            // reference key 1
            $table->unsignedBigInteger('idsecteur');
            $table->foreign('idsecteur')->references('id')->on('secteur_de_ventes')->onDelete('cascade')->onUpdate('cascade');
            // reference key 2
            $table->unsignedBigInteger('idlogis');
            $table->foreign('idlogis')->references('id')->on('logis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};