@extends('layout.crudPlantilla')

    @section('title', 'adminCategorias')

    @section('h1', 'Admin de Categorías')

    @section('main')

      @if( session()->has('mensaje') )
            <script>
            Swal.fire({
              icon: 'success',
              title: 'Agregada',
              text: '{{ session()->get('mensaje') }}',
            })
            </script>
      @endif
      @if( session()->has('cuidado') )
            <script>
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
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
