<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_movie', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('movie_id');
            $table->string('name');
            $table->string('cast');
            $table->string('path');
            $table->string('direction');
            $table->string('duration');
            $table->timestamps();
            $table->unsignedInteger('genero_id');
        });
        Schema::table('tb_movie', function (Blueprint $table) {
            $table->foreign('genero_id')->references('id')->on('tb_genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_movie');
    }
}
