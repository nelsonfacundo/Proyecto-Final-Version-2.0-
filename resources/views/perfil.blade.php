@extends('layout.plantilla')

    @section('title', 'perfil')

    <head>
        <link rel="stylesheet" href="{{ asset('css/perfil.css')}} ">
    </head>

@section('main')
<div class="container">
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
                            <li>Username:<br> 
                                <p> {{Auth::user()->username}}</p>
                            </li>
                            <li>Email :<br>
                                {{Auth::user()->email}}
                             </li>
                            <li>Fecha de nacimiento :<br>
                             <p>{{Auth::user()->release_date}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ranking">
                    <h2>#Ranking</h2>
                    <div class="block-ranking">
                        <ul>
                           <li><p>#324234</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection



