@extends('layout.crudPlantilla')

    @section('title', 'adminCategorias')

    @section('h1', 'Admin de Categorías')

    @section('main')

      @if( session()->has('mensaje') )
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
      @endif

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
                  <td>{{$categoria->id_cat}}</td>
                  <td>{{$categoria->categoria}}</td>
                  <td>
                      <a href="/formModificarCategoria/{{$categoria->id_cat}}" class="btn btn-warning">
                          Modificar
                      </a>
                  </td>
                  <td>
                      <a href="/adminCategorias/{{$categoria->id_cat}}" class="btn btn-danger">
                          Eliminar
                      </a>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>

      {{ $categorias->links() }}


  @endsection
