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
        Schema::create('director_awards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('director_id');
            $table->unsignedBigInteger('award_id');
            $table->integer('number');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
            $table->foreign('award_id')->references('id')->on('awards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('director_awards');
    }
};
