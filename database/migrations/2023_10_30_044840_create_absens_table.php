<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('absens', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pegawai');
            $table->foreign('id_pegawai')
                  ->references('id')->on('pegawais')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_kehadiran');
            $table->foreign('id_kehadiran')
                  ->references('id')->on('kehadirans')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_hadir');
            $table->foreign('id_hadir')
                  ->references('id')->on('hadirs')
                  ->onDelete('cascade')->onUpdate('cascade');
                  $table->string("nama");
                  $table->date("tanggal_awal");
                  $table->date("tanggal_akhir");
                  $table->time("waktu");
                  $table->string("status_absen");
                  $table->string("aktivitas");
                  $table->string("bukti")->nullable;
                  $table->string("dll");
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
        Schema::dropIfExists('absens');
    }
}
