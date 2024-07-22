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
        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->foreignId('aspirasis_category_id')
                ->nullable()->constrained()
                ->on('aspirasi_categories')->references('id')
                ->nullOnDelete()->cascadeOnUpdate();
            $table->string('judul');
            $table->longText('aspirasi');
            $table->string('telepon')->nullable();
            $table->boolean('is_anonimous')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirasis');
    }
};
