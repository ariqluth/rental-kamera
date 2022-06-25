<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengelolaLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengelola_laporan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_bayar');
            $table->Integer('id_customer');
            $table->Integer('id_pemilik');
            $table->Integer('id_admin');
            $table->Integer('id_pengambilan');
            $table->Integer('id_pengembalian');
            $table->string('bukti_laporan');
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
        Schema::dropIfExists('pengelola_laporan');
    }
}
