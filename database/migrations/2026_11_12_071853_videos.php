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
        Schema::create('videos', function (Blueprint $table) {
            $table->string('id', 5)->primary();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('video_path');
            $table->string('thumbnail_path');
            $table->string('category');
            $table->json('tags')->nullable();
            $table->text('description')->nullable();
            $table->string('length', 8);              // "15:30"
            $table->unsignedBigInteger('view_count')->default(0);
            $table->unsignedBigInteger('playback_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
