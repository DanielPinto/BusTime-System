<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtinerarioTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etinerarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('linha_id')->unsigned();
            $table->foreign('linha_id')->references('id')->on('linhas');
            $table->text('etinerario');
            $table->integer('codigo')->unsigned();
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
        Schema::drop('etinerarios');
    }
}
