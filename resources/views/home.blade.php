@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Panel de administrador</h1>
                    <a href=/crud >ABM</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                 </div>
                    @endif
                    <h2> Bienvenido {{Auth::user()->username}} </h2>
                    <img src="/storage/avatares/{{ Auth::user()->avatar}}" width="250px" alt="foto de perfil" class="foto-perfil">  
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
