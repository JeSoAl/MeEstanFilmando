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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('director_id')->nullable();
            $table->string('title');
            $table->string('original');
            $table->string('description')->nullable();;
            $table->integer('duration');
            $table->year('year');
            $table->boolean('cinema');
            $table->string('picture')->default('/pictures/films/Portada.png');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
