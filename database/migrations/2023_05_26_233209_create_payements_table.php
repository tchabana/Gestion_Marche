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
        Schema::create('payements', function (Blueprint $table) {
            $table->id("idPayement");
            $table->integer('montant')->unsigne();
            $table->boolean('etat');
            $table->string('typeDePayements');
            $table->timestamps();
            // reference key 1
            $table->unsignedBigInteger('idcontrats');
            $table->foreign('idcontrats')->references('id')->on('contrats')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payements');
    }
};