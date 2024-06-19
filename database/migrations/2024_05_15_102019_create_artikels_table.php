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
            $table->string('judul');
            $table->string('slug');
            $table->string('konten');
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('gambar')->nullable();
            $table->json('tags');
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
