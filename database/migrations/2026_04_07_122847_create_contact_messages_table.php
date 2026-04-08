<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 30);
            $table->string('email')->nullable();
            $table->string('type');             // Lapangan Futsal, Mini Soccer, etc.
            $table->string('city');
            $table->string('budget')->nullable();
            $table->text('message')->nullable();
            $table->boolean('is_read')->default(false);
            $table->text('notes')->nullable();  // internal admin notes
            $table->timestamps();

            $table->index('is_read');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};