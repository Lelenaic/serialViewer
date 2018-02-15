<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('demandeurId')->unsigned();
            $table->foreign('demandeurId')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->integer('receveurId')->unsigned();
            $table->foreign('receveurId')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->boolean('accepte');
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
        Schema::dropIfExists('amis');
    }
}
