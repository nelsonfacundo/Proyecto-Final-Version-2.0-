@extends('layout.plantilla')

@section('main')



<head>
    <link rel="stylesheet" href="{{ asset('css/styleRegister.css')}} ">
</head>

<div class="contenido">
                    <div class="title">
                      <h1>Shovel knight</h1>
                    </div>
                    <div class="formulario">
                      <div class="formulario-container">
                          <div class="subtitulo">
                              <h2>Registro</h2>
                          </div>
                        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data" >
                        
                         @csrf

                          <div class="formulario-nombre">
                            <label for="username">{{ __('Name') }}</label><br>
                               <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                               <br>
                                @error('username')
                                <span style="color:red;">  <strong>{{ $message }}</strong></span>
                                @enderror
                          </div>
                          <div class="formulario-email">
                            <label for="email">{{ __('E-Mail Address') }}</label><br>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                              <br>
                                @error('email')
                                <span style="color:red;">  <strong>{{ $message }}</strong></span>
                                @enderror
                              
                          </div>
                          <div class="formulario-pass">
                            <label for="password">{{ __('Password') }}</label><br>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <br>
                                  @error('password')
                                  <span style="color:red;">  <strong>{{ $message }}</strong></span>
                                  @enderror
                              
                          </div>
                          <div class="formulario-repass">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label><br>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                               
                          </div>
                          <div class="formulario-imagen">
                            <label>Avatar:<label>
                              <input type='file' name='avatar'><br>
                              
                         </div>
                          <div class="formulario-edad">
                              <p>Fecha de nacimiento:</p>
                            <div class="block-display-edad">
							            <input type="date" class="form-control" name="release_date" value="2019-01-25">
                          </div>
                          </div>
                          <div class="formulario-button">
                              <button type="submit" name="button"> {{ __('Register') }}!</button>
                          </div>
                          </form>  
                              <div class="terminos">
                                <dd>Al registrarte,Aceptas nuestras condiciones de uso  y policita de privacidad</dd>
                                <dd>Ya tienes cuenta ? <a href="login.php">iniciar sesion</dd> </p>
                            </div>
                      </div>
                </div>
        </div>
@endsection
