<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternationalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internationals', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('country_id')->unsigned();
            $table->Integer('mahasiswa_id')->unsigned();
            $table->Integer('jurusan_id')->unsigned();
            $table->String('passport')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->Integer('program');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');            
            $table->foreign('country_id')->references('id')->on('country');
            $table->foreign('jurusan_id')->references('id')->on('jurusan');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internationals');
    }
}
