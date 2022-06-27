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
            $table->foreignId('id_customer')->constraint();
            $table->foreignId('id_pemilik')->constraint();
            $table->string('reference');
            $table->string('merchant_ref');
            $table->string('bank_tujuan');
            $table->string('harga');
            $table->foreignId('alat_id')->constraint();
            $table->enum('status', ['paid','unpaid'])->default('unpaid');
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
