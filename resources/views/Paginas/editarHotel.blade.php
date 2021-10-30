@extends('layouts.plantilla')

@section('content')
    <div class="p-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

        @if (\Session::has('warning'))
            <div class="alert alert-warning">
                <ul>
                    <li>{!! \Session::get('warning') !!}</li>
                </ul>
            </div>
        @endif

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
            Editar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);">
                        <h5 class="modal-title" style="align-content: center" id="exampleModalLabel">Formulario de
                            Editar de Hotel </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{ route('actualizarHotel') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input type="text" name="nombre_hotel" class="form-control"
                                        value="{{ $hotel->nombre_hotel }}" placeholder="Ingresa el nombre del Hotel">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Dirección:</label>
                                    <input type="text" name="direccion" class="form-control"
                                        value="{{ $hotel->direccion }}" placeholder="Ingresa una Dirección">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Categoria:</label>
                                    <input type="text" name="tipo_hotel" id="categoria" value="{{ $hotel->tipo_hotel }}"
                                        placeholder="Ingresa la Categoria del Hotel" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_hotel" value="{{ $hotel->id_hotel }}">
                        <div class="modal-footer">

                            <button type="submit" name="btnEnviar" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>

        @endsection
