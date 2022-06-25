<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_pemilik');
            $table->string('email_pemilik');
            $table->string('password_pemilik');
            $table->string('hak_akses');
            $table->string('alamat_pemilik');
            $table->string('no_hp_pemilik');
            $table->string('gambar_profile_pemilik')->nullable();
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
        Schema::dropIfExists('pemilik');
    }
}
