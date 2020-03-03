@extends('layout.crudPlantilla')

    @section('title', 'adminCategorias')

    @section('h1', 'Admin de Categorías')

    @section('main')

      <table class="table table-striped table-dark">
          <thead class="thead-dark">
          <tr>
              <th>id</th>
              <th>Categoria</th>
              <th colspan="2">
                  <a href="/formAgregarCategoria" class="btn btn-primary">Agregar</a>
              </th>
          </tr>
          </thead>
          <tbody>
          @foreach( $categorias as $categoria )
              <tr>
                  <td>{{$categoria->id}}</td>
                  <td>{{$categoria->categoria}}</td>
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

      {{ $categorias->links() }}


  @endsection
