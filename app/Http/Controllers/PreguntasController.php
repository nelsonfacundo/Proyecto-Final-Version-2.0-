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
      $preguntas = Pregunta::with('getCategoria')->get();
      $preguntas = Pregunta::with('getRespuesta')->get();
      $preguntas = Pregunta::paginate(8);
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
      $categorias = Categorias::all();
      return view('formAgregarPregunta',
          [
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
        $respuesta = new Respuesta();
        $pregunta = new Pregunta();
        $categoria = Categorias::all();
        ######## validacion
        $validacion = $request->validate(
            [
                'pregunta' =>'required|min:3|max:75',
                'categoria'=>'min:3',
            ]
        );
        $respuesta->verdadera = request('verdadera');
        $respuesta->respuesta1 = request('respuesta1');
        $respuesta->respuesta2 = request('respuesta2');
        $respuesta->respuesta3 = request('respuesta3');
        $respuesta->save();

        $pregunta->pregunta = request('pregunta');
        $pregunta->cat_id = request('id_cat');
        $pregunta->respuesta_id = $respuesta->id_respuesta;
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
      $respuesta = Respuesta::find($id);
      $categorias = Categorias::all();
      return view('formModificarPregunta', [ 'pregunta'=>$pregunta, 'categorias'=>$categorias, 'respuesta'=>$respuesta]);
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
      $respuesta = Respuesta::find($request->input('id_respuesta'));

      $respuesta->verdadera = $request->input('verdadera');
      $respuesta->respuesta1 = $request->input('respuesta1');
      $respuesta->respuesta2 = $request->input('respuesta2');
      $respuesta->respuesta3 = $request->input('respuesta3');
      $respuesta->save();

      $Pregunta->pregunta = $request->input('pregunta');
      $Pregunta->cat_id = $request->input('cat_id');

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
      $respuesta = Respuesta::find($id);
      $Pregunta->delete();
      $respuesta->delete();
      return redirect("/crud")
      ->with('mensajeEliminar', 'Pregunta '.$Pregunta->pregunta.' eliminada con éxito');
    }
}
