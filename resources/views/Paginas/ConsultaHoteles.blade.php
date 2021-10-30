@extends('layouts.plantilla')

@section('content')

    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Hoteles Registrados
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered border-primary">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Tipo de Hotel</th>
                <th scope="col justify-content-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hoteles as $hotel)
                <tr>
                    <th scope="row">{{ $hotel->id_hotel }}</th>
                    <td>{{ $hotel->nombre_hotel }}</td>
                    <td>{{ $hotel->direccion }}</td>
                    <td>{{ $hotel->tipo_hotel }}</td>
                    <td>
                    <div class="row justify-content-end">
                        <div class="col-4">
                            <form method="POST" action="{{ route('eliminarHotel', $hotel->id_hotel) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                        <div class="col-4">
                            <form method="GET" action="{{ route('editarHotel', $hotel->id_hotel) }}">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>
                        </div>
                    </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
