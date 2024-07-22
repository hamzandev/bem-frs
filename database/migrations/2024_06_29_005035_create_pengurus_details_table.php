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
            $table->foreignId('pengurus_id')->unique()
                ->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('kabinet_id')->nullable()
                ->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreignId('departemen_id')->nullable()->constrained()->cascadeOnUpdate();
            $table->foreignId('biro_id')->nullable()->constrained()->cascadeOnUpdate();

            $table->text('telepon')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('gender', ['L', 'P'])->default('L');
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
