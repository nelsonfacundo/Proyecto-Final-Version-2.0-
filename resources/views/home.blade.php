@extends('layouts.app')

<head>
<link rel="stylesheet" href="{{ asset('css/admin.css')}} ">
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Bienvenido {{Auth::user()->username}} </h1>
                    <div class="menu">
                        <ul>
                            <li><a href=/ >Home</a></li>
                            <li><a href=/juego >Juego</a></li>
                            <li><a href=/faq >Faq</a></li>
                            <li><a href=/crud >AMB</a></li>
                            <li><a href=/ranking >Ranking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                         <img src="/storage/avatares/{{ Auth::user()->avatar}}" width="250px" alt="foto de perfil" class="foto-perfil">
                    </div>
                    <div class="col-md-6">
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                 </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
