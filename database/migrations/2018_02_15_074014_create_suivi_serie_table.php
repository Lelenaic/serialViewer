<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuiviSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suivi_serie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serieId')->unsigned();
            $table->foreign('serieId')
                  ->references('id')->on('series')
                  ->onDelete('cascade');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->date('dateDebut');
            $table->boolean('fini');
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
        Schema::dropIfExists('suivi_serie');
    }
}
