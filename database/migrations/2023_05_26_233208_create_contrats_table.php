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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // referrence key 1
            $table->unsignedBigInteger('matricule');
            $table->foreign('matricule')->references('id')->on('commercants')->onDelete('cascade')->onUpdate('cascade');
            // referrence key 2
            $table->unsignedBigInteger('idplace');
            $table->foreign('idplace')->references('id')->on('places')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};