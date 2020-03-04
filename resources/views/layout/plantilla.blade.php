<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/plantilla.css')}} ">
    <script src="https://kit.fontawesome.com/86f3787a46.js" crossorigin="anonymous"></script>   
    <title>@yield('title')</title>
</head>

<body>   
 <div class="container">
        <div id="header">
            <div class="main-header">
                <img src="img/logo.jpg" alt="logo">
                <input type="checkbox" id="menu-bar">
                 <label class="fas fa-bars" for="menu-bar"></label>
                 <nav class="menu">
                    <ul>
                        <li><a href="/index">inicio</a></li>
                        <li><a href="ranking.php">ranking</a></li>
                        <li><a href="perfil.php">perfil</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="contacto.php">contactanos</a></li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                       <li> @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else              
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                                <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                           
                    @endguest
                </ul>
            </li>
            </div>
        </div>
    </nav>
                  
                    </ul>
                 </nav>
            </div>
        </div>
        
        <main class="container">

           @yield('main')

        </main>

        <div id="footer">
              <img src="img/logo.jpg">
                <div class="block-footer">
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">Quienes</a></li>
                     <li><a href="#">Servicios</a></li>
                     <li><a href="#">Sucursales</a></li>
                     <li><a href="contacto.html">Contacto</a></li>
                     <li><a href="#">Terminos</a></li>
                     <li><a href="#">Privacidad</a></li>
                     <li><a href="#">Cookies</a></li>
                      </ul>
                </div> 
      </div>
 
</body>
</html>