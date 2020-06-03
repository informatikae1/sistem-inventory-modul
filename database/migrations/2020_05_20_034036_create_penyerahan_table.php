<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyerahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyerahan', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_penyerahan');
            $table->integer('modul_id');
            $table->integer('cabang_id');
            $table->string('kelas');
            $table->string('detail');
            $table->integer('jml_modul');
            $table->integer('jml_notebook');
            $table->string('pembayaran');
            $table->string('pic_pembayaran');
            $table->integer('pengantar');
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
        Schema::dropIfExists('penyerahan');
    }
}
