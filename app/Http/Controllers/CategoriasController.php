<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categorias = Categorias::paginate(10);

      return view('adminCategorias', [ 'categorias' =>  $categorias ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formAgregarCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $categoria = new Categorias();
      ######## validacion
      $validacion = $request->validate(
          [
              'categoria' => 'required|min:3|max:75',
          ]
      );
      $categoria->categoria = request('categoria');
      $categoria->save();
      return redirect('/adminCategorias')->with('mensaje', 'Categoria '.$categoria->categoria.' agregada con éxito');
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
     * @param  int  $id_cat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categoria = Categorias::find($id);
      return view('formModificarCategoria', [ 'categoria'=>$categoria ]);
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
      $Categoria = Categorias::find($request->input('id_cat'));
      $Categoria->categoria = $request->input('categoria');
      $Categoria->save();
      return redirect('/adminCategorias')
          ->with('mensaje', 'Categoria '.$Categoria->categoria.' modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       $Categoria = Categorias::find($id);
       $Categoria->delete();
       return redirect("/adminCategorias")
       ->with('mensajeEliminar', 'Categoria '.$Categoria->categoria.' eliminada con éxito');
     }
}
