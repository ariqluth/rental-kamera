<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiDetailAlatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Table('detail_alat', function (Blueprint $table) {
           $table->dropColumn('alat'); // mengampus kolom alat
           $table->unsignedBigInteger('alat_id')->nullable(); // menambah kolom alat dan menambah relasi
            $table->foreign('alat_id')->references('id')->on('alat'); // menambah foregin key dikolom detail_alat 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_alat', function (Blueprint $table) {
            $table->string('alat');
            $table->dropForeign(['alat_id']);
        });
    }
}
