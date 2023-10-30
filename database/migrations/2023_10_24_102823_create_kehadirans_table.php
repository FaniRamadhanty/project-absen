<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id')
            ->on('pegawais')->onDelete('cascade');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('jumlah_hari');
            $table->string('bukti')->nullable();
            $table->string('dll');
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
        Schema::dropIfExists('kehadirans');
    }
}
