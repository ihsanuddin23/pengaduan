<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->date('tanggal_pengaduan');
            $table->char('nik');
            $table->text('isi_laporan');
            $table->string('foto');
            $table->enum('status',['0','proses','selesai']);
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
        Schema::dropIfExists('tbl_pengaduan');
    }
}