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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->integer('id_transaksi')->autoIncrement();
            $table->integer('id_user');
            $table->integer('id_menu');
            $table->timestamp('tgl_transaksi')->nullable();
            $table->string('alamat_tujuan')->nullable();
            $table->string('kode_promo')->nullable();
            $table->string('no_telp' , 15)->nullable();
            $table->string('catatan')->nullable();
            $table->integer('jumlah_pesanan')->nullable();
            $table->enum('status',['y','n'])->default('n');
            $table->enum('pembayaran',['COD','Qris','Ovo','M-Banking']);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_menu')->references('id_menu')->on('menus');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
