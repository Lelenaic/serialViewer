<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_serie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serieId')->unsigned();
            $table->foreign('serieId')
                  ->references('id')->on('series')
                  ->onDelete('cascade');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->integer('note');
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
        Schema::dropIfExists('note_serie');
    }
}
