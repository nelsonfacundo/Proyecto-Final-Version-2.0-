@extends('layout.crudPlantilla')

    @section('title', 'adminCategorias')

    @section('h1', 'Admin de Categorías')

    @section('main')

      <p>Listado de Categorías</p>

      @if( session()->has('mensaje') )
            <script>
            Swal.fire({
              icon: 'success',
              title: 'Agregada',
              text: '{{ session()->get('mensaje') }}',
            })
            </script>
      @endif
      @if( session()->has('mensajeEliminar') )
            <script>
            Swal.fire({
              icon: 'success',
              title: 'Eliminada',
              text: '{{ session()->get('mensajeEliminar') }}',
            })
            </script>
      @endif

      <table class="table table-striped table-dark">
          <thead class="thead-dark">
          <tr>
              <th>ID</th>
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
                      <a id="eliminarCat" href="/adminCategorias/{{$categoria->id_cat}}" class="btn btn-danger">
                          Eliminar
                          <script>
                          let eliminarCat = document.querySelector('#eliminarCat');
                          eliminarCat.addEventListener('click', function(event) {
                            event.preventDefault();
                            Swal.fire({
                              title: '¿Estás seguro que querés eliminar la categoría?',
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085D6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: '<a href="/adminCategorias/{{$categoria->id_cat}}">Borrar categoría</a>'
                            })
                          })
                        </script>
                      </a>

                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
      {{ $categorias->links() }}
  @endsection
