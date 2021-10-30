
<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
</head>
<body>
<nav style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);" class="navbar navbar-expand-lg navbar-dark   shadow-sm p-2 rounded-bottom mb-5">
    <a class="navbar-brand" href="/"   >  SOHITWEB    </a>

    <button class="navbar-toggler" type="button" data-tog   gle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span  class="navbar-toggler-icon"></span>
    </button>

    <div  id="navbarSupportedContent">
        <a class="navbar-brand "   href="/"  style=" color:black; "><i class="fas fa-home"></i></a>
    </div>

    <div class="collapse navbar-collapse  " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown  "  >
                <a style="color:white" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Registro de Hoteles
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);" >
                    <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('registroHotel')}}"   ><i class="fas fa-atlas"></i> Registro Hotel </a>
                    <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('registroHabitacion')}}"   ><i class="fas fa-atlas"></i> Registro Habitación </a>
                    <a class="dropdown-item btn btn-primary  " id="Rg_cat"  href="{{route('registroTipoHab')}}"   ><i class="fas fa-atlas"></i> Tipo de Habitación </a>
                    <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('registroEstadHabitacion')}}"   ><i class="fas fa-atlas"></i> Estado Habitación </a>
                    <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('registroHabitacion')}}"   ><i class="fas fa-atlas"></i> Metodo de Pago </a>
                    <a class="dropdown-item btn btn-primary  " id="Rg_cat"  href="{{route('registroCliente')}}"   ><i class="fas fa-atlas"></i> Pago</a>


                </div>
            <li class="nav-item dropdown  "  >
                <a style="color:white" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Registro de Clientes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);" >
                    <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('registroHotel')}}"   ><i class="fas fa-atlas"></i> Reserva </a>
                    <a class="dropdown-item btn btn-primary  " id="Rg_cat"  href="{{route('registroCliente')}}"   ><i class="fas fa-atlas"></i> Registro Cliente </a>

                </div>

            <li class="nav-item dropdown  "  >
                <a style="color:white" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mostrar Datos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);" >
                    <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('mostrar')}}"   ><i class="fas fa-atlas"></i> Hoteles Registrados </a>
                    <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('mostrarhabit')}}"   ><i class="fas fa-atlas"></i> Habitaciones Registradas </a>

                </div>
        </ul>


    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
