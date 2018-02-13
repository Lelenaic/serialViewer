<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie_genre', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serieId')->unsigned();
            $table->foreign('serieId')
                  ->references('id')->on('series')
                  ->onDelete('cascade');
            $table->integer('genreId')->unsigned();
            $table->foreign('genreId')
                  ->references('id')->on('genres')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('serie_genre');
    }
}
