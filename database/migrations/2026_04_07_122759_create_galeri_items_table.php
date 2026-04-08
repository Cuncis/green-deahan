<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('galeri_items', function (Blueprint $table) {
            $table->id();
            $table->string('category');           // futsal | minisoccer | padel | badminton | proses
            $table->string('title');
            $table->string('kota')->nullable();
            $table->string('material')->nullable();
            $table->text('description')->nullable();
            $table->string('badge')->nullable();       // e.g. "⚽ Futsal"
            $table->string('badge_color')->nullable(); // tailwind classes
            $table->string('image_path')->nullable();  // storage path
            $table->boolean('is_tall')->default(false);
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['category', 'is_active', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri_items');
    }
};