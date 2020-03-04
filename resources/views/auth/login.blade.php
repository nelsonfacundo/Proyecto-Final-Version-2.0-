@extends('layout.plantilla')

    @section('title', 'Login')

    <head>
        <link rel="stylesheet" href="{{ asset('css/styleLogin.css')}} ">
    </head>

@section('main')
<div class="contenido">
    <div class=main-container>
       <div class="title">
           <h1>Shovel knight</h1>
         </div>
           <div class="formulario">
             <div class="formulario-container">
                 <div class="subtitulo">
                       <h2>Iniciar sesion</h2>
                     </div>                            
                     <div class="login-plataformas">
                        <div class="login-facebook">
                          <div class="icono-facebook">
                            <i class="fab fa-facebook-square"></i>
                           </div>
                           <div class="texto-facebook">
                            <p>Conectate con facebook</p>
                          </div>
                        </div>
                        <div class="login-steam">
                          <div class="icono-steam">
                            <i class="fab fa-steam-square"></i>
                           </div>
                           <div class="texto-steam">
                            <p>Conectate con Steam</p>
                          </div>
                        </div>
                    </div>  
                   <form action="{{ route('login') }}" method="post" >
                    @csrf
                     <div class="login-nombre">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>  <br>           
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <br>
                         @error('email')
                         <span style="color:red;">
                               <strong>{{ $message }}</strong>
                          </span>  
                         @enderror
                     </div>
                       <div class="login-pass">
                       <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <br>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <br>
                         @error('password')
                          <span style="color:red;">
                               <strong>{{ $message }}</strong>
                          </span>                           
                         @enderror
                       </div>
                       <div class="form-check">
                             <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                             <label class="form-check-label" for="remember">
                                 {{ __('Remember Me') }}
                             </label>
                         </div>
                       <div class="formulario-button">
                       <button type="submit" class="btn btn-primary">
                             {{ __('Login') }}
                         </button>
                        <br>
                         @if (Route::has('password.request'))
                             <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {{ __('Forgot Your Password?') }}
                             </a>
                         @endif
                         </div>
                       </form>
                           
                     </div>
                 </div>
          </div>      
    </div>
@endsection


