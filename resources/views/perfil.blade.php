@extends('layout.plantilla')

    @section('title', 'perfil')

    <head>
        <link rel="stylesheet" href="{{ asset('css/perfil.css')}} ">
    </head>

@section('main')
<div class="container">
        <div id="main">
            <div class="main-container">   
                <div class="intro">
                    <h1>Usuario</h1>
                    <div class="edit">
                        <a href="#">Edit Profile</a>
                    </div>
                </div>  
                <div class="profile">
                <img src="/storage/avatares/{{ Auth::user()->avatar}}" width="300px" alt="foto de perfil" class="foto-perfil">
                    <div class="block-profile">
                        <h2>Informacion:</h2>
                        <ul>
                            <li>Userame: <p> {{Auth::user()->username}}</p></li>
                            <li>Email :{{Auth::user()->email}} </li>
                            <li>Fecha de nacimiento : <p>{{Auth::user()->release_date}}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="logros">
                    <h2>Logros</h2>
                    <div class="block-logros">
                        <ul>
                            <li><img src="img/logros/logro-1.jpg" alt=""></li>
                            <li><img src="img/logros/logro-2.jpg" alt=""></li>
                            <li><img src="img/logros/logro-3.jpg" alt=""></li>
                            <li><img src="img/logros/logro-4.jpg" alt=""></li>
                            <li><img src="img/logros/logro-5.jpg" alt=""></li>
                            <li><img src="img/logros/logro-6.jpg" alt=""></li>
                            <li><img src="img/logros/logro-7.jpg" alt=""></li>
                            <li><img src="img/logros/logro-8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="friend-list">
                <h2>Lista de amigos</h2>
                <div class="list">
                     
                </div>
            </div>
        </div>
    </div>

@endsection



