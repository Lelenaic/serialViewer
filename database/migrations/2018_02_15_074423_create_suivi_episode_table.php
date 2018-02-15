<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuiviEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suivi_episode', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suiviSerieId')->unsigned();
            $table->foreign('suiviSerieId')
                  ->references('id')->on('suivi_serie')
                  ->onDelete('cascade');
            $table->integer('episodeId')->unsigned();
            $table->foreign('episodeId')
                  ->references('id')->on('episodes')
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
        Schema::dropIfExists('suivi_episode');
    }
}
