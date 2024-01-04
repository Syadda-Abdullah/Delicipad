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
        Schema::create('menus', function (Blueprint $table) {
            $table->integer('id_menu')->autoIncrement();
            $table->string('nama_menu');
            $table->enum('jenis_makanan',['food','drinks','desserts','snacks','vegetables','internasional_foods','other']  );
            $table->string('deskripsi');
            $table->string('info');
            $table->integer('harga');
            $table->string('foto');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
