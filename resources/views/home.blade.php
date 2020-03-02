@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informacion de usuario</div>
                <img src="/storage/avatares/{{ Auth::user()->avatar}}" width="300px" alt="foto de perfil" class="foto-perfil">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                 </div>
                    @endif

                    <h1> {{Auth::user()->username}} </h1>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
