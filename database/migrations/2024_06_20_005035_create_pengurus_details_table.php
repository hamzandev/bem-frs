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
        Schema::create('pengurus_details', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->year('tahun_pengurus');
            $table->foreignId('pengurus_id')->unique()->constrained()->cascadeOnUpdate();
            $table->foreignId('prodi_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('jabatan_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('departemen_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('biro_id')->constrained()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurus_details');
    }
};
