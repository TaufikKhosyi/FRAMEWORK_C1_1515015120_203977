<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableNasabah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->increments('id_nasabah');
            $table->string('nama',50);
            $table->unsignedInteger('pengguna_id');

            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_telp',12);
            $table->integer('saldo_awal');
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
        Schema::drop('nasabah');
    }
}
