@extends('layout.crudPlantilla')

    @section('title', 'listadoPreguntas')

    @section('h1', 'Listado de Preguntas')

    @section('main')

        <p>Bienvenido al ABM</p>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="/formAgregarPregunta" class="btn btn-primary">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        @foreach($preguntas as $pregunta )
            <tr>
                <td>{{$pregunta->id_preg}}</td>
                <td>{{$pregunta->pregunta}}</td>
                <td>Wesa</td>
                <td>wesa</td>

                <td>
                    <a href="" class="btn btn-warning">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">
                        Eliminar
                    </a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>

    @endsection
