@extends('layouts.plantilla')
@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: cornflowerblue;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref ">


    <div class="content">
        <img src="{{asset('imagenes/Logo.png')}}" width="300" height="300">

        <div class="title m-b-md">
            Bienvenido a SohitWeb

        </div>

        <div class="links">
            <a href="https://drive.google.com/drive/u/1/folders/12xHIwtjk8OwWnpDuO53XfgKk9FJQl3gd" > <img src="https://yasehacerlo.com/wp-content/uploads/2016/05/Carpetas-1.png" width="100" height="100">Documentación</a>



        </div>
    </div>

</div>


</body>
</html>



@endsection
