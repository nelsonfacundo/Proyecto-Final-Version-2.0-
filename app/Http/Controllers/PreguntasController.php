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
                'preguntas'=>$preguntas,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //$respuestas = Respuesta::all();
      $categorias = Categorias::all();
      return view('formAgregarPregunta',
          [
              //'respuestas'=>$respuestas,
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
        //dd($request->all());
        //$respuesta = new Respuesta;
        //$respuesta->respuesta1 = $request['respusta1'
        $pregunta = new Pregunta();
        $categoria = Categorias::all();
        ######## validacion
        $validacion = $request->validate(
            [
                'pregunta' => 'required|min:3|max:75',
                'categoria'=>'min:3'
            ]
        );
        $pregunta->pregunta = request('pregunta');

        $pregunta->cat_id = request('id_cat');

        $pregunta->save();

        return redirect('/crud')->with('mensaje', 'Pregunta '.$pregunta->pregunta.' agregada con éxito');
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
      $pregunta = Pregunta::find($id);
      return view('formModificarPregunta', [ 'pregunta'=>$pregunta ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $Pregunta = Pregunta::find($request->input('id_preg'));
      $Pregunta->pregunta = $request->input('pregunta');
      $Pregunta->pregunta = $request->input('cat_id');
      $Pregunta->save();
      return redirect('/crud')
          ->with('mensaje', 'Pregunta '.$Pregunta->pregunta.' modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Pregunta = Pregunta::find($id);
      $Pregunta->delete();
      return redirect("/crud")
      ->with('mensajeEliminar', 'Pregunta '.$Pregunta->pregunta.' eliminada con éxito');
    }
}
