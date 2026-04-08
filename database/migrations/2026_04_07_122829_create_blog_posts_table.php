<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('category');            // panduan | futsal | padel | minisoccer | badminton | material | tips
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('body');
            $table->string('image_path')->nullable();
            $table->string('cat_label')->nullable();   // "📚 Panduan Bisnis"
            $table->string('cat_color')->nullable();   // tailwind classes
            $table->string('read_time')->nullable();   // "8 menit"
            $table->json('tags')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->index(['category', 'is_published']);
            $table->index('is_featured');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};