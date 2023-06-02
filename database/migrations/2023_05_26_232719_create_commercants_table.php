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
        Schema::create('commercants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaiss');
            $table->string('quartier');
            $table->string('tel');
            $table->string('email')->default(null);
            $table->string('ville');
            $table->timestamps();
            // referrence key
            $table->unsignedBigInteger('idagent');
            $table->foreign('idagent')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commercants');
    }
};