<?php


namespace App\Http\Controllers;


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
    public function registrohabitacion()
    {
        return \view('Paginas.registroHabitacion');

    }
    public function registroCliente()
    {
        return \view('Paginas.registroCliente');

    }

}
