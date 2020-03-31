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
                      <input type="text" class="form-control" name="verdadera"  value="{{ old('verdadera') }}" id="verdadera" placeholder="Ingrese Respuesta Correcta" required>
                      <input type="text" class="form-control" name="respuesta1"  value="{{ old('respuesta1') }}" id="respuesta1" placeholder="Ingrese Respuesta Incorrecta" required>
                      <input type="text" class="form-control" name="respuesta2"  value="{{ old('respuesta2') }}" id="respuesta2" placeholder="Ingrese Respuesta Incorrecta" required>
                      <input type="text" class="form-control" name="respuesta3"  value="{{ old('respuesta3') }}" id="respuesta3" placeholder="Ingrese Respuesta Incorrecta" required>
                    </div>
                    <div class="form-group">
                    <label>Categoría</label>
                    <select name="cat_id" class="form-control" required>
                        <option value="cat_id">{{$pregunta->getCategoria->categoria}}</option>
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
