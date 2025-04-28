<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id'); // Primary key
            $table->unsignedBigInteger('kategori_id'); // Foreign key ke m_kategori
            $table->string('kode_barang', 20)->unique();
            $table->string('nama_barang', 100);
            $table->integer('stok')->default(0);
            $table->decimal('harga', 10, 2);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('kategori_id')->references('id')->on('m_kategori')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
