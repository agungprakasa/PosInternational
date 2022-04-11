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
        Schema::create('tracking', function (Blueprint $table) {
            $table->id();
            $table->string('barcode');
            $table->string('negara_posisi_barang');
            $table->string('nama_kantor');
            $table->string('berat_barang');
            $table->string('kategori_barang');
            $table->string('harga_barang');
            $table->string('invoice')->nullable();
            $table->string('layanan');
            $table->string('biaya_kirim');
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
        Schema::dropIfExists('tracking');
    }
};
