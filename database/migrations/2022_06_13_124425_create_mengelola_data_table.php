<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMengelolaDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengelola_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pemilik');
            $table->foreignId('id_admin');
            $table->string('jumlah_pembelian');
            $table->string('rating');
            $table->string('data_lapor');
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
        Schema::dropIfExists('mengelola_data');
    }
}
