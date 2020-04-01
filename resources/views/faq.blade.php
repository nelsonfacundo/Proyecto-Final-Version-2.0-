@extends('layout.rankPlantilla')

    @section('title', 'faq')


<head>
    <link rel="stylesheet" href="{{ asset('css/faq.css')}} ">
</head>

    @section('main')


      <div class="contenido">
        <section id="content-all">
          <section id="content-header">
              <h2>Preguntas frecuentes</h2>
          </section>
            <div id="cont">

                  <br>
                    <ul>
                        <li class="pregunta">¿En qué consiste el juego?</li>
                        <li class="respuesta">"Es un juego de preguntas que provará tu ingenio y conocimiento sobre cultura general."</li>
                        <li class="pregunta">¿Cómo se suman puntos?</li>
                        <li class="respuesta">"Contestando bien las respuestas, obviamente"
                        <li class="pregunta">¿Cómo saber si contesté bien la pregunta?</li>
                        <li class="respuesta">"El color de la pantalla cambiará a verde (correcto) o rojo (incorrecto)."
                        <li class="pregunta">¿Cómo crear usuario?</li>
                        <li class="respuesta">"Ve a la pagina de <a href="{{ route('register') }}">{{ __('Register') }}</a> y selecciona crear usuario"
                        <li class="pregunta">¿Cómo llegar al primer puesto?</li>
                        <li class="respuesta">"Respondiendo la mayor cantidad de preguntas correctas!"
                    </ul>
                </div>
        </section>
      </div>


    @endsection
