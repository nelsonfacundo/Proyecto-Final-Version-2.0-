@extends('layout.plantilla')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/styleContact.css">
    <script src="https://kit.fontawesome.com/86f3787a46.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="main">
        <div class="contenido">
            <div class=main-container>
                <div class="formulario">
                    <div class="formulario-container">
                        <div class="subtitulo">
                            <h2>CONTACTANOS</h2>
                        </div> <br>
                        <form action="/contacto" method="post">
                            {{csrf_field()}}
                            <div class="form-name">
                                <label class="name" for="name">Nombre</label><br> <br>
                                <input id="name" type="text" name="name" placeholder="Ingrese su nombre">
                            </div> <br>
                            <div class="form-email">
                                <label class="email" for="email">Correo electrónico</label><br> <br>
                                <input id="email" type="email" name="email" placeholder="Ingrese su email">
                            </div> <br>
                            <div class="form-message">
                                <label class="message" for="message">Mensaje</label><br> <br>
                                <input id="message" type="comment" name="message" placeholder="Escriba su mensaje...">
                            </div>
                            <div class="formulario-button">
                                <input type="submit" name="submit" id="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>