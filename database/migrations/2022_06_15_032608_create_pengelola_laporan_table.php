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
            $table->id();
            $table->foreignId('id_bayar');
            $table->foreignId('id_customer');
            $table->foreignId('id_pemilik');
            $table->foreignId('id_admin');
            $table->foreignId('id_pengambilan');
            $table->foreignId('id_pengembalian');
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
