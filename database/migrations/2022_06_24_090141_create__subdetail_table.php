<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdetail', function (Blueprint $table) {
            $table->bigIncrements('id_subDetail');
            $table->bigInteger('pengambalian_id');
            $table->bigInteger('pengembalian_id');
            $table->bigInteger('sewa_id');
            $table->string('sewa');
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
        Schema::dropIfExists('subdetail');
    }
}
