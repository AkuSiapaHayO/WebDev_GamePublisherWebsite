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
        Schema::create('game_platform', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('game_id')->constrained('games')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('platform_id')->constrained('platforms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_platform');
    }
};
