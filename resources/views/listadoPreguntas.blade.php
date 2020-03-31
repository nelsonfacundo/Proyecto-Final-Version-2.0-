@extends('layout.crudPlantilla')

    @section('title', 'listadoPreguntas')

    @section('h1', 'Listado de Preguntas')

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
      @if( session()->has('mensajeEliminar') )
            <script>
            Swal.fire({
              icon: 'success',
              title: 'Eliminada',
              text: '{{ session()->get('mensajeEliminar') }}',
            })
            </script>
      @endif

        <p>Bienvenido al ABM</p>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Pregunta</th>
                <th>Respuesta Correcta</th>
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
                <td>{{$pregunta->getRespuesta->verdadera}}</td>
                <td>{{$pregunta->getCategoria->categoria}}</td>

                <td>
                    <a href="/formModificarPregunta/{{$pregunta->id_preg}}" class="btn btn-warning">
                        Modificar
                    </a>
                </td>
                <td>
                  <a id="eliminarPregunta" href="/crud/{{$pregunta->id_preg}}" class="btn btn-danger">
                      Eliminar
                      <script>
                      let eliminarPregunta = document.querySelector('#eliminarPregunta');
                      eliminarPregunta.addEventListener('click', function(event) {
                        event.preventDefault();
                        Swal.fire({
                          title: '¿Estás seguro que querés eliminar la pregunta?',
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085D6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: '<a href="/crud/{{$pregunta->id_preg}}">Borrar Pregunta</a>'
                        })
                      })
                    </script>
                  </a>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>
        {{ $preguntas->links() }}
    @endsection
