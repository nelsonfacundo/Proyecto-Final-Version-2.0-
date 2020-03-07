<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Respuesta;
use App\Pregunta;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $preguntas = Pregunta::with('getRespuesta', 'getCategoria')->get();
        return view('/listadoPreguntas',
            [
                'preguntas'=>$preguntas
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $respuestas = Respuesta::all();
      $categorias = Categorias::all();
      return view('formAgregarPregunta',
          [
              'respuestas'=>$respuestas,
              'categorias'=>$categorias
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$resouesta = new Respuesta;
        //$resuesta->respuesta1 = $request['respusta1'
        $pregunta = new Pregunta();
        ######## validacion
        $validacion = $request->validate(
            [
                'pregunta' => 'required|min:3|max:75',

            ]
        );
        $pregunta->pregunta = request('pregunta');
        $pregunta->save();
        return redirect('/listadoPreguntas')->with('mensaje', 'Pregunta '.$pregunta->pregunta.' agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
