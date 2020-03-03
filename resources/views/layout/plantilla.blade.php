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
                        <li><a href="/home">inicio</a></li>
                        <li><a href="/ranking">ranking</a></li>
                        <li><a href="perfil.php">perfil</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="/crud">ABM</a></li>
                        <li><a href="contacto.php">CONTACTO</a></li>
                        <li><a href="/register">REGISTRARSE</a></li>
                        <li><a href="/login">iniciar sesion</a></li>
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
                <li><a href="/home">INICIO</a></li>
                <li><a href="/ranking">RANKING</a></li>
                <li><a href="perfil.php">PERFIl</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="/crud">ABM</a></li>
                <li><a href="contacto.php">CONTACTO</a></li>
                <li><a href="/login">INICIAR SESION</a></li>
                </ul>
              </div>
        </div>
 </div>
</body>
</html>
