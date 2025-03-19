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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id'); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key ke m_user
            $table->date('tanggal_penjualan');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
    
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
