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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('category_id')->nullable()->constrained()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate();
            $table->string('judul');
            $table->string('slug');
            $table->longText('konten');
            $table->boolean('is_published')->default(false);
            $table->string('gambar')->nullable();
            $table->date('published_at')->nullable();
            // $table->json('categroies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
