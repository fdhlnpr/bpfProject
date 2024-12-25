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
    Schema::create('barang', function (Blueprint $table) {
        $table->id();
        $table->string('nama_barang');
        $table->decimal('harga', 10, 2);
        $table->text('image_url'); // Menggunakan text untuk menyimpan link gambar yang lebih panjang
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
