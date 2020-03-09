<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mensaje;

class ContactoController extends Controller
{
    public function agregarMensaje (Request $req) {
        
        $reglas = [
            "name" => "required|string|min:2",
            "email" => "required|string|min:5",
            "message" => "required|string|min:10|max:300"
        ];
        
        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres",
            "max" => "El campo :attribute debe tener un máximo de :max caracteres"

        ];
        
        $this -> validate($req, $reglas, $mensajes);
                
        $mensajeNuevo = new Mensaje ();

        $mensajeNuevo -> name = $req["name"];
        $mensajeNuevo -> email = $req["email"];
        $mensajeNuevo -> message = $req["message"]; 

        $mensajeNuevo -> save();

        return redirect("/home");

    }
}
