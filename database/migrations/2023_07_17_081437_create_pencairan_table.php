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
        Schema::create('pencairan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penerima_id');
            $table->foreign('penerima_id')->references('id')->on('penerima')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->date('tanggal_pencairan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencairan');
    }
};
