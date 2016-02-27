<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('linha_id')->unsigned();
            $table->foreign('linha_id')->references('id')->on('linhas');

            $table->integer('hora_id')->unsigned();
            $table->foreign('hora_id')->references('id')->on('horas');

            $table->integer('sentido_id')->unsigned();
            $table->foreign('sentido_id')->references('id')->on('sentidos');

            $table->integer('epoca_id')->unsigned();
            $table->foreign('epoca_id')->references('id')->on('epocas');

            $table->integer('etinerario_id')->unsigned();
            $table->foreign('etinerario_id')->references('id')->on('etinerarios');

            $table->integer('modalidade_id')->unsigned();
            $table->foreign('modalidade_id')->references('id')->on('modalidades');

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
        Schema::drop('itens');
    }
}
