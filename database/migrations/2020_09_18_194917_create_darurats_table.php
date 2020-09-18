<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaruratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_darurat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nip');
            $table->date('tgl_pengajuan');
            $table->string('informasi');
            $table->text('alasan');
            $table->string('dokumentasi');
            $table->string('approve');
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
        Schema::dropIfExists('darurats');
    }
}
