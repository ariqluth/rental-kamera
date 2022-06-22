<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiAlatPemilikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alat', function (Blueprint $table) {
        $table->dropColumn('pemilik'); //menghapus kolom kelas
        $table->unsignedBigInteger('users_id')->nullable(); //menambah kolom kelas_id
        $table->foreign('users_id')->references('id')->on('users'); //mengatur foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alat', function (Blueprint $table) {
            $table->string('pemilik');
            $table->dropForeign(['users_id']);
        });
    }
}
