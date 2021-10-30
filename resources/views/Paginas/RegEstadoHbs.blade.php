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
            Registrarse
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);">
                        <h5 class="modal-title" style="align-content: center" id="exampleModalLabel">Formulario de
                            Registro del Estado Habitación  </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form action="{{ route('registrarEstadoHab') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label>Estado de la Habitación:</label>
                                    <input type="text" name="estado" class="form-control"
                                           placeholder="Ingresa el Estado de Habitacion ">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>



@endsection

