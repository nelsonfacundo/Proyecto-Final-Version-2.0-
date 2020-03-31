@extends('layout.crudPlantilla')

    @section('title', 'Alta de una nueva Pregunta')


    @section('main')

    @section('h1', 'Alta de una nueva Pregunta')

        <div class="card col-md-7 mt-5 p-3 mx-auto">
        <form action="/agregarPregunta" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Pregunta</label>
                <input type="text" class="form-control" name="pregunta"  value="{{ old('pregunta') }}" id="pregunta" placeholder="Ingrese Pregunta" required>
            </div>

            <div class="form-group">
              <label>Respuestas</label>
              <input type="text" class="form-control" name="verdadera"  value="{{ old('verdadera') }}" id="verdadera" placeholder="Ingrese Respuesta Correcta" required>
              <input type="text" class="form-control" name="respuesta1"  value="{{ old('respuesta1') }}" id="respuesta1" placeholder="Ingrese Respuesta Incorrecta" required>
              <input type="text" class="form-control" name="respuesta2"  value="{{ old('respuesta2') }}" id="respuesta2" placeholder="Ingrese Respuesta Incorrecta" required>
              <input type="text" class="form-control" name="respuesta3"  value="{{ old('respuesta3') }}" id="respuesta3" placeholder="Ingrese Respuesta Incorrecta" required>
            </div>

            <div class="form-group">
            <label>Categoría</label>
            <select name="id_cat" class="form-control" required>
                <option value="">Seleccione una Categoría</option>
              @foreach( $categorias as $categoria )
                <option value="{{ $categoria->id_cat }}">{{ $categoria->categoria}}</option>
              @endforeach
            </select>
            </div>

            <button type="submit" class="btn btn-dark px-4">
                <i class="far fa-plus-square fa-lg mr-2"></i>
                Agregar Pregunta
            </button>
            <a href="/crud" class="btn btn-outline-secondary ml-3">
              <i class="fas fa-reply mr-2"></i>
                Volver al listado de preguntas
            </a>

            @if(count($errors))
                <div class="form-group mt-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </form>
        </div>

    @endsection
