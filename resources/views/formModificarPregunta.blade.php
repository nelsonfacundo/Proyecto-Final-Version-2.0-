@extends('layout.crudPlantilla')

    @section('title', 'Formulario de modificación de una Pregunta')

    @section('h1', 'Fornulario de modificación de una Pregunta')

    @section('main')
      <p>Modificar Pregunta</p>
            <div class="card col-md-7 mt-5 p-3 mx-auto">
                <form action="/modificarPregunta" method="post">
                    @csrf
                    Pregunta
                    <br>
                    <div class="form-group">
                      <input type="text" name="pregunta" value="{{ $pregunta->pregunta }}" class="form-control">
                      <input type="hidden" name="id_preg" value="{{ $pregunta->id_preg }}">
                      <label>Respuestas</label>
                      <input type="hidden" name="id_respuesta" value="{{ $respuesta->id_respuesta }}">
                      <input type="text" class="form-control" name="verdadera"  value="{{ $pregunta->getRespuesta->verdadera }}" id="verdadera" required>
                      <input type="text" class="form-control" name="respuesta1"  value="{{ $pregunta->getRespuesta->respuesta1 }}" id="respuesta1"  required>
                      <input type="text" class="form-control" name="respuesta2"  value="{{ $pregunta->getRespuesta->respuesta2 }}" id="respuesta2"  required>
                      <input type="text" class="form-control" name="respuesta3"  value="{{ $pregunta->getRespuesta->respuesta3 }}" id="respuesta3"  required>
                    </div>
                    <div class="form-group">
                    <label>Categoría</label>
                    <select name="cat_id" class="form-control" required>
                      @foreach( $categorias as $categoria )
                        <option value="{{ $categoria->id_cat }}">{{ $categoria->categoria}}</option>
                      @endforeach
                    </select>
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
