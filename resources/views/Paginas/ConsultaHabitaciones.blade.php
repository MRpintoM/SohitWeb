@extends('layouts.plantilla')

@section('content')

    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Habitaciones Registradas
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered border-primary">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numero</th>
            <th scope="col">precio</th>
            <th scope="col">Personas</th>
            <th scope="col">camas</th>
            <th scope="col">Tipo de Habitacion</th>
            <th scope="col">Estado de la Habitacion</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($habitaciones as $habitacion)
            <tr>
                <th scope="row">{{ $habitacion->id_habitacion }}</th>
                <td>{{ $habitacion->numero }}</td>
                <td>{{ $habitacion->precio }}</td>
                <td>{{ $habitacion->cantidad_huespe }}</td>
                <td>{{ $habitacion->camas }}</td>
                <td>{{ $habitacion->tipo }}</td>
                <td>{{ $habitacion->estado }}</td>


            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
