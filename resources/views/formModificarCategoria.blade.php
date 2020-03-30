@extends('layout.crudPlantilla')

    @section('title', 'Formulario de modificación de una Categoría')

    @section('h1', 'Formulario de modificación de una Categoría')

    @section('main')
      <p>Modificar Categoría</p>
            <div class="card col-md-7 mt-5 p-3 mx-auto">
                <form action="/modificarCategoria" method="post">
                    @csrf
                    Categoria
                    <br>
                    <div class="form-group">
                      <input type="text" name="categoria" value="{{ $categoria->categoria }}" class="form-control">
                      <input type="hidden" name="id_cat" value="{{ $categoria->id_cat }}">
                    </div>

                    <br>
                    <button type="submit" class="btn px-4 btn-outline-secondary">
                        <i class="far fa-plus-square fa-lg mr-2 "></i>
                        Agregar Categoria
                    </button>
                    <a href="/adminCategorias" class="btn btn-outline-secondary ml-3">
                        <i class="fas fa-reply mr-2"></i>
                        Volver al panel de categorías
                    </a>

                </form>
            </div>

    @endsection
