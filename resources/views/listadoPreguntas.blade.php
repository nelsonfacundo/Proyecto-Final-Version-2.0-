@extends('layout.crudPlantilla')

    @section('title', 'listadoPreguntas')

    @section('h1', 'Listado de Preguntas')

    @section('main')

      <main class="container">
        <div class="row">
          <div class="col-12 ">
            <table class="table table-bordered table-dark">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Pregunta</th>
                  <th scope="col">Respuesta</th>
                  <th scope="col">Categoría</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Eliminar</th>
                  <td><button type="button" class="btn btn-secondary btn-lg ">Agregar</button></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Pregunta</th>
                  <td>Respuesta</td>
                  <td>Categoria</td>
                  <td><a class="btn btn-warning" href="/adminCategorias">Modificar</a></td>
                  <td><a class="btn btn-danger" href="/adminCategorias">Eliminar</a></td>
                </tr>
                <tr>
                  <th>Pregunta</th>
                  <td>Respuesta</td>
                  <td>Categoria</td>
                  <td><a class="btn btn-warning" href="/adminCategorias">Modificar</a></td>
                  <td><a class="btn btn-danger" href="/adminCategorias">Eliminar</a></td>
                </tr>
                <tr>
                  <th>Pregunta</th>
                  <td>Respuesta</td>
                  <td>Categoria</td>
                  <td><a class="btn btn-warning" href="/adminCategorias">Modificar</a></td>
                  <td><a class="btn btn-danger" href="/adminCategorias">Eliminar</a></td>
                </tr>
                <tr>
                  <th>Pregunta</th>
                  <td>Respuesta</td>
                  <td>Categoria</td>
                  <td><a class="btn btn-warning" href="/adminCategorias">Modificar</a></td>
                  <td><a class="btn btn-danger" href="/adminCategorias">Eliminar</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    @endsection
