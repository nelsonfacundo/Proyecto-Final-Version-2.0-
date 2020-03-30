@extends('layout.crudPlantilla')

    @section('title', 'Formulario de modificación de una Pregunta')

    @section('h1', 'Fornulario de modificación de una Pregunta')

    @section('main')
      <p>Modificar Categoría</p>
            <div class="card col-md-7 mt-5 p-3 mx-auto">
                <form action="/modificarPregunta" method="post">
                    @csrf
                    Categoria
                    <br>
                    <div class="form-group">
                      <input type="text" name="pregunta" value="{{ $pregunta->pregunta }}" class="form-control">
                      <input type="hidden" name="id_preg" value="{{ $pregunta->id_preg }}">
                      <option name="cat_id" value="{{$pregunta->getCategoria->categoria}}"</option>
                    </div>

                    <br>
                    <button type="submit" class="btn px-4 btn-outline-secondary">
                        <i class="far fa-plus-square fa-lg mr-2 "></i>
                        Agregar Pregunta
                    </button>
                    <a href="/crud" class="btn btn-outline-secondary ml-3">
                        <i class="fas fa-reply mr-2"></i>
                        Volver al listado de Preguntas
                    </a>

                </form>
            </div>

    @endsection
