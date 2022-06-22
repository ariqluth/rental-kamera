<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_ambil');
            $table->Integer('id_bayar');
            $table->Integer('id_sewa');
            $table->Integer('id_customer');
            $table->Integer('id_pemilik');
            $table->Integer('id_admin');
            $table->date('tgl_pengembalian');
            $table->string('disewa_kamera');
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
        Schema::dropIfExists('pengembalian');
    }
}
