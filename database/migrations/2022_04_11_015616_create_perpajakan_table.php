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
        Schema::create('perpajakan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kiriman');
            $table->string('bea_masuk');
            $table->string('ppn_impor');
            $table->string('pph_pasal22_impor');
            $table->string('bmtp');
            $table->string('administrasi_pos');
            $table->string('sewa_gudang');
            $table->string('bea_handling');
            $table->string('ppn_11%');
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
        Schema::dropIfExists('perpajakan');
    }
};
