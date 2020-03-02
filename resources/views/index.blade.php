@extends('layout.plantilla')

    @section('title', 'Home')


<head>
    <link rel="stylesheet" href="{{ asset('css/index.css')}} ">
</head>

    @section('main')

    <div id="main">
          <div class="titulo"> <h1>Shovel knight</h1></div>
            <div class="banner">
             </div>
             <div class="main-contenido">
                <div class="link">
                    <a href="#">Descargar</a>
                </div>
             <div class="block-container">
                <div class="block-left">
                    <div class="subtitulo"> <h2>Noticias</h2></div>
                    <div class="block-notices">
                        <dl class="article">
                            <dt class="aviso">Alquimia Doble o Nada - 16 de noviembre de 2019</dt>
                            <dd class="dia">16/11/2019</dd>
                            <dd class="teaser">Te conformas o sigues arriesgando?!</dd>
                        </dl>
                        <dl class="article">
                            <dt class="aviso">Escala de Premios Dragón Guardián</dt>
                            <dd class="dia">16/11/2019</dd>
                            <dd class="teaser">Entre el 15 y el 19 de Noviembre de 2019</dd>
                        </dl>
                        <dl class="article">
                            <dt class="aviso">Mantenimiento - Martes 12 de Noviembre</dt>
                            <dd class="dia">11/11/2019</dd>
                            <dd class="teaser">El martes 12 de noviembre habrá mantenimiento </dd>
                        </dl>
                        <dl class="article">
                            <dt class="aviso">¡Calendario de Eventos de GS y CM!</dt>
                            <dd class="dia">2/11/2019</dd>
                            <dd class="teaser">¡Mira lo que hemos preparado para Noviembre!..</dd>
                        </dl>
                    </div>
                  </div>
                  <div class="block-right">
                    <div class="subtitulo"><h2>Videos</h2></div>
                    <div class="videos">
                      <div class="video-uno">
                        <iframe width="380" height="315" src="https://www.youtube.com/embed/EqEy7BB5DNk" frameborder="5" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                        <div class="video-dos">
                          <iframe width="380" height="315" src="https://www.youtube.com/embed/zoC_SFRqrsg" frameborder="5s" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="login-iconos">
                        <div class="contenedor-iconos">
                         <div class="titulo-iconos"> <h2>seguinos</h2> </div>
                            <div class="iconos">
                                <i class="fab fa-facebook-square"></i>
                                <i class="fab fa-discord"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                             </div>
                        </div>                     
                    </div>
                 </div>
                 <div class="block-caracteristicas">
                    <div class="subtitulo"><h2>Caracteristicas</h2></div>
                    <div class="caracteristicas">
                      <ul>
                        <li>El estilo maravillosamente auténtico de Yacht Club Games cierra la brecha entre ayer y hoy. El diseño, el arte y el audio se remontan a los días de 8 bits.</li>
                         <li>Los sistemas de hoy también le dan toques modernos a Shovel Knight: animación detallada, fondos de paralaje multicapa y diseño de juego evolucionado.</li>
                         <li>Salta sobre los huecos! ¡Duelo con enemigos! ¡Descubre el tesoro! Encuentra secretos! ¡Mejorar! Shovel Knight es fácil de aprender y jugar, pero el desafío está en todas partes.</li>
                         <li>¡Múltiples bandas sonoras impresionantes de Jake "Virt" Kaufman con canciones adicionales de Manami Matsumae!</li>
                         <li>Acumula riquezas para mejorar tu armadura y armas.</li>
                         <li>¡Fondo detallado y vivo y animación! ¡Grandes y hermosos píxeles!</li>
                         <li>¡Personajes y jefes adorables!</li>
                         <li>El juego equilibrado es una cálida bienvenida para los recién llegados, y un viejo abrazo para los expertos.</li>
                         <li>Un ligero toque narrativo con humor, ligereza y corazón.</li>
                         <li>¡Vuelve a contar la aventura y descubre todos los secretos del mundo con New Game +!</li>
                         <li>Modo desafío: un modo con todas las funciones con más de 50 niveles de desafío que suben la apuesta en todos los sentidos.</li>
                         <li>Body Swap: ¿alguna vez quisiste que Shovel Knight fuera una dama o Shield Knight fuera un chico? Bueno, ahora puedes cambiarlos como quieras, con diseños completamente nuevos para todos los personajes principales de Shovel of Hope.</li>
                         <li>Cooperativa local! - ¡Consigue un amigo y juega a Shovel of Hope como una aventura totalmente cooperativa! Nota: No disponible en versiones 3DS o Vita.</li>
                       </ul>
                     </div>
                     </div>
            </div>
              

             </div>
        </div>


    @endsection


