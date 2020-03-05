@extends('layout.crudPlantilla')

    @section('title', 'Formulario de modificación una Marca')

    @section('h1', 'Fornulario de modificación una Marca')

    @section('main')

            <div class="alert bg-light p-4">
                <form action="/modificarCategoria" method="post">
                    @csrf
                    Categoria:
                    <br>
                    <input type="text" name="categoria" value="{{ $categoria->categoria }}" class="form-control">
                    <input type="hidden" name="id_cat" value="{{ $categoria->id_cat }}">
                    <br>
                    <button class="btn btn-dark">Agregar</button>

                </form>
            </div>

    @endsection
