<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->bigIncrements('id_preg');
            $table->timestamps();
            $table->string('pregunta');

            $table->unsignedBigInteger('cat_id')->nullable()->unsigned();
            $table->foreign('cat_id')->references('id_cat')->on('categorias')->onDelete('cascade');

            $table->unsignedBigInteger('respuesta_id')->nullable()->unsigned();
            $table->foreign('respuesta_id')->references('id_respuesta')->on('respuestas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //$table->dropForeign('preguntas_respuesta_id_foreign');
        //$table->dropForeign('preguntas_cat_id_foreign');
        Schema::dropIfExists('preguntas');
    }
}
