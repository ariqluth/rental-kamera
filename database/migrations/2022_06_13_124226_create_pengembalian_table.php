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
            $table->id();
            $table->foreignId('id_ambil');
            $table->foreignId('id_bayar');
            $table->foreignId('id_sewa');
            $table->foreignId('id_customer');
            $table->foreignId('id_pemilik');
            $table->foreignId('id_admin');
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
