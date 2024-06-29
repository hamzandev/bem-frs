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
        Schema::create('biros', function (Blueprint $table) {
            $table->id();
            $table->string('biro')->unique();
            $table->foreignId('kepala_biro')
                ->constrained()->references('id')->on('penguruses')
                ->cascadeOnUpdate();
            $table->text('detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biros');
    }
};
