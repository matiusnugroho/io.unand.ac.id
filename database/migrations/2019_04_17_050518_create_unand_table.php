<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unand_student', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('country_id')->unsigned();
            $table->String('paspor')->nullable();
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->Integer('mahasiswa_id')->unsigned();
            $table->Integer('jurusan_id')->unsigned();
            $table->String('NIM')->unique();
            $table->String('prodi')->nullable();
            $table->Integer('program');
            $table->String('univ_tujuan');

            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('jurusan_id')->references('id')->on('jurusan');
            $table->foreign('country_id')->references('id')->on('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unand');
    }
}
