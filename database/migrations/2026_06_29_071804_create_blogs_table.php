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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('thumbnail'); 
            $table->string('category'); // Category of the blog post 
            $table->string('excerpt'); // Short excerpt of the blog post
            $table->string('content'); // Main content of the blog post
            $table->string('read_time'); // Estimated read time
            $table->string('is-published')->default(false); // Publication status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
