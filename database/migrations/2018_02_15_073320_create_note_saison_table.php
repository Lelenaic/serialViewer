<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteSaisonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_saison', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('saisonId')->unsigned();
            $table->foreign('saisonId')
                  ->references('id')->on('saisons')
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
        Schema::dropIfExists('note_saison');
    }
}
