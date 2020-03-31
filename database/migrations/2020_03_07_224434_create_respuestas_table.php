<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->bigIncrements('id_respuesta');
            $table->timestamps();
            $table->string('verdadera');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuesta3');

            $table->unsignedBigInteger('preg_id')->nullable()->unsigned();
            $table->foreign('preg_id')->references('id_preg')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
