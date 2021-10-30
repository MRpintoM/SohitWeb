
<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />


    <style>

      

        #top{
           position: relative; 
           text-align: center;
           width: auto;
           height: auto;
           margin-left:auto;
           margin-right: auto;
           color: black;
           
            
          
           border-radius: 10px;
           width: 700px;
           margin-top: 50px;
           
         
        }

        .circulo{
            position: absolute;
            width: 750px;
            height: 750px;
            left: -347px;
            top: -338px;
            background: radial-gradient(50% 50% at 50% 50%, rgba(0, 35, 151, 0.603) 0%, rgba(0, 25, 110, 0) 100%);
        }

        

      
    </style>
</head>
<body>
    <div>
        <div class="circulo"></div>
    </div>
    
            <nav  id="top" class="navbar navbar-expand-lg navbar-dark border border-black  shadow-sm p-2 rounded-pill">
                <a class="navbar-brand p-1 ml-2" style="color: black" href="/"   >  SOHITWEBB    </a>
                <button class="navbar-toggler" type="button" data-tog   gle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span  class="navbar-toggler-icon"></span>
                </button>
            
                <div  id="navbarSupportedContent">
                    <a class="navbar-brand "   href="/"  style=" color:black; "><i class="fas fa-home"></i></a>
                </div>
            
                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown  "  >
                            <a style="color:rgb(0, 0, 0)" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a style="color:rgb(2, 2, 2)" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Registro de Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);" >
                                <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('registroHotel')}}"   ><i class="fas fa-atlas"></i> Reserva </a>
                                <a class="dropdown-item btn btn-primary  " id="Rg_cat"  href="{{route('registroCliente')}}"   ><i class="fas fa-atlas"></i> Registro Cliente </a>
            
                            </div>
            
                        <li class="nav-item dropdown  "  >
                            <a style="color:rgb(0, 0, 0)" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mostrar Datos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background:-webkit-linear-gradient(left top,#FFC300  ,#2980B9);" >
                                <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('mostrar')}}"   ><i class="fas fa-atlas"></i> Hoteles Registrados </a>
                                <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route('mostrarhabit')}}"   ><i class="fas fa-atlas"></i> Habitaciones Registradas </a>
            
                            </div>
                    </ul>
                 </div>
            </nav>
         
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
