<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_customer');
            $table->Integer('id_sewa');
            $table->Integer('id_pemilik');
            $table->date('tanggal_bayar');
            $table->string('jumlah');
            $table->string('bank');
            $table->string('bank_tujuan');
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
        Schema::dropIfExists('pembayaran');
    }
}
