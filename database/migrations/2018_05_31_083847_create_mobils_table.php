<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mobil');
            $table->string('gambar');
            $table->string('harga');
            $table->string('warna');
            $table->string('transmisi');
            $table->date('tahun_keluar');
            $table->string('deskripsi');
            $table->unsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merk')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedInteger('tipe_id');
            $table->foreign('tipe_id')->references('id')->on('tipe')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('mobils');
    }
}
