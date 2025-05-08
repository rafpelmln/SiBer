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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('kategori', ['Guru', 'Fasilitas', 'Bullying']);
            $table->string ('judul_pengaduan');
            $table->text ('deskripsi');
            $table->string ('nama_guru')-> nullable(); // hanya untuk kategori 'Guru'
            $table->enum ('status_pengaduan', ['belum_diproses', 'sedang_diproses', 'selesai'])->default('belum_diproses');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
