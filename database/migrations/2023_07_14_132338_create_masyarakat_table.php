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
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk')->required();
            $table->string('no_rek')->required();
            $table->string('nama')->required();
            $table->string('jenis_bantuan')->required();
            $table->decimal('jumlah', 15, 2); // Untuk menyimpan nilai dalam Rupiah dengan desimal dua digit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};
