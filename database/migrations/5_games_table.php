<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->date('releaseDate');
            $table->float('price');
            $table->string('g_image');
            $table->string('background_image');
            $table->string('processor');
            $table->string('gpu');
            $table->string('ram');
            $table->string('storage');
            $table->foreignId('rating_id')->constrained('ratings')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('franchise_id')->nullable()->constrained('franchises')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
