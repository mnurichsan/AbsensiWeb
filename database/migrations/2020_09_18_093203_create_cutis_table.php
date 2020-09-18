<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cuti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl_pengajuan');
            $table->unsignedBigInteger('nip');
            $table->string('informasi');
            $table->date('tgl_awal_cuti');
            $table->date('tgl_akhir_cuti');
            $table->text('alasan');
            $table->string('atasan');
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
        Schema::dropIfExists('cutis');
    }
}
