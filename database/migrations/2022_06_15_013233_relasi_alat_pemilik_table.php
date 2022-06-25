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
        $table->dropColumn('kondisi'); //menghapus kolom kelas
        $table->unsignedBigInteger('users_id')->nullable(); //menambah kolom kelas_id
        $table->unsignedBigInteger('detailAlat_id')->nullable(); //menambah kolom kelas_id
        $table->foreign('users_id')->references('id')->on('users'); //mengatur foreign key
        $table->foreign('detailAlat_id')->references('id')->on('detail_alat'); //mengatur foreign key
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
            $table->string('kondisi');
            $table->dropForeign(['detailAlat_id']);
        });
    }
}
