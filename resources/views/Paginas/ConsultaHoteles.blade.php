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

<table class="table">
    <thead class="thead-dark">
    <tr>

        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Dirección</th>
        <th scope="col">Tipo de Hotel</th>

        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>



@endsection
