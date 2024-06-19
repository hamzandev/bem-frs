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
        Schema::create('penguruses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nim');
            $table->string('nama');
            $table->enum('gender', ['L', 'P']);
            $table->string('tanggal_lahir');
            $table->string('jabatan');
            $table->string('tahun_kepengurusan');
            $table->string('foto')->nullable();
            $table->foreignId('prodi_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('departemen_id')->constrained()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penguruses');
    }
};
