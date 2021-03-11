<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTanggapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan');
            $table->unsignedBigInteger('id_pengaduan');
            $table->unsignedBigInteger('id_petugas');
            $table->date('tanggal_pengaduan');
            $table->text('tanggapan');
            $table->timestamps();
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('tbl_pengaduan');
            $table->foreign('id_petugas')->references('id_petugas')->on('tbl_petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tanggapan');
    }
}