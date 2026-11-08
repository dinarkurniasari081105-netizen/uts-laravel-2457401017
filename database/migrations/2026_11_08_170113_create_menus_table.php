<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // Nama Makanan / Minuman
            $table->string('category');         // Makanan Utama / Makanan Ringan / Minuman
            $table->string('code');             // Kode Menu (Unique)
            $table->decimal('price', 10, 2);    // Harga Menu
            $table->text('description')->nullable(); // Deskripsi Menu
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
