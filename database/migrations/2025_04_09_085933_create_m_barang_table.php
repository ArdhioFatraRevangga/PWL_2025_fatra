<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id(); // <--- INI WAJIB ADA!
            $table->string('nama_barang', 100);
            $table->unsignedBigInteger('kategori_id')->index(); // FK ke m_kategori
            $table->integer('stok')->default(0);
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('m_kategori')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
