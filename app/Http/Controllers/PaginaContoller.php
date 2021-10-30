<?php


namespace App\Http\Controllers;


use App\Models\EstadoHabitacion;
use App\Models\tipoHabitacion;

class PaginaContoller
{
    public function Welc()
    {
        return \view('welcome');


    }
    public function registro()
    {
        return \view('Paginas.registroHotel');

    }
    public function registroTipo()
    {
        return \view('Paginas.registroTipoHab');

    }
    public function registrohabitacion()
    {
        return \view('Paginas.registroHabitacion');

    }
    public function registroEstadoHab()
    {
        return \view('Paginas.RegEstadoHbs');

    }
    public function registroCliente()
    {
        return \view('Paginas.registroCliente');

    }
    public function registroHab(){


        $tipos = tipoHabitacion::all();
        $estados = EstadoHabitacion::all();



        return view('Paginas.registroHabitacion', compact('tipos','estados'));
    }



}
