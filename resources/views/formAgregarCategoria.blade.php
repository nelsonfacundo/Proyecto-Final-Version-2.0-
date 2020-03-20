@extends('layout.crudPlantilla')

    @section('title', 'formAgregarCategoria')

    @section('h1', 'formAgregarCategoria')

    @section('main')
      <p>Agregar Categoría</p>
      <div class="card col-md-7 mt-5 p-3 mx-auto">
          <form action="/agregarCategoria" method="post" >
              @csrf

              <div class="form-group">
                  <label for="categoria">Categoria:</label>
                  <input type="text" class="form-control" name="categoria"  value="{{ old('categoria') }}" id="categoria" placeholder="Nombre de la Categoria">
              </div>
              <button type="submit" class="btn px-4">
                  <i class="far fa-plus-square fa-lg mr-2"></i>
                  Agregar Categoria
              </button>
              <a href="/adminCategorias" class="btn btn-outline-secondary ml-3">
                  <i class="fas fa-reply mr-2"></i>
                  Volver al panel de categorías
              </a>

              @if(count($errors))
                <script>
                Swal.fire({
                  icon: 'error',
                  title: 'Mal ahí',
                  text: 'Capo te olvidaste la categoría'
                })
                </script>
              @endif

          </form>
          </div>

      @endsection
