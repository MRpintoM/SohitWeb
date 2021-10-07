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

        @if(\Session::has('warning'))
            <div class="alert alert-warning">
                <ul>
                    <li>{!! \Session::get('warning') !!}</li>
                </ul>
            </div>
    @endif

    <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
            Registrarse
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);">
                        <h5 class="modal-title" style="align-content: center" id="exampleModalLabel">Formulario de Registro de Habitaciones </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>




                    <form action="#" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Número:</label>
                                    <input type="number" name="numero" class="form-control" placeholder="Ingresa el número de Habitación"  >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Precio:</label>
                                    <input type="text" name="precio" class="form-control" placeholder="Ingresa el precio de la habitación" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Capacidad:</label>
                                    <input type="text" name="capacidad" id="capacidad" placeholder="Ingresa la capacidad de personas por habitación" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Camas:</label>
                                    <input type="text" name="camas" id="camas" placeholder="Ingresa la cantidad de camas" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Tipo de  Habitación:</label>
                                    <input type="text" name="tipoHabitacion" id="tipoHabitacion" placeholder="Ingresa que tipo de habitación es" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Estado:</label>
                                    <input type="text" name="estado" id="estado" placeholder="El estado de la habitación es" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" >

                            <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>



@endsection
