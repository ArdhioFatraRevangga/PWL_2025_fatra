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
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id'); // Primary key
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->unsignedBigInteger('level_id'); // Foreign key
            $table->timestamps();
    
            $table->foreign('level_id')->references('id')->on('m_level')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
