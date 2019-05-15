<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->Integer('users_id')->unsigned()->nullable();
            $table->Integer('jurusan_id')->unsigned()->nullable();
            $table->Integer('gender')->nullable();
            $table->Date('tgl_lahir')->nullable();
            $table->String('tmp_lahir')->nullable();
            $table->String('address')->nullable();
            $table->String('marital_status')->nullable();
            $table->String('religon')->nullable();
            $table->String('jobs')->nullable();
            $table->String('telp')->nullable();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
