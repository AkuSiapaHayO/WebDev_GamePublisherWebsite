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
        Schema::create('game_genre', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->unsignedBigInteger('game_id');
            // $table->unsignedBigInteger('genre_id');

            $table->foreignId('game_id')->constrained('games')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade')->onUpdate('cascade');

            // $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_genre');
    }
};
