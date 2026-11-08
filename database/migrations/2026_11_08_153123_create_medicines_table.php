<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // Nama Obat
            $table->string('category');         // Opsi: Obat Bebas / Obat Bebas Terbatas / Obat Keras
            $table->string('code');             // Kode Obat (Unique)
            $table->date('expired_at');         // Tanggal Kedaluwarsa
            $table->decimal('price', 10, 2);    // Harga Obat
            $table->boolean('is_prescription_required'); // Butuh Resep Dokter (True/False)
            $table->text('description')->nullable();     // Deskripsi Khasiat Obat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
};
