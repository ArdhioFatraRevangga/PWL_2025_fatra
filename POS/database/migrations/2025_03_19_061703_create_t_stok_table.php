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
    Schema::create('t_stok', function (Blueprint $table) {
        $table->id('stok_id'); // Primary key
        $table->unsignedBigInteger('barang_id'); // Foreign key ke m_barang
        $table->unsignedBigInteger('user_id'); // Foreign key ke m_user
        $table->integer('jumlah_stok');
        $table->timestamps();

        $table->foreign('barang_id')->references('id')->on('m_barang')->onDelete('cascade');
        $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
