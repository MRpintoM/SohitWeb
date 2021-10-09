<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HotelController
{

    public function mostrar(){

        return \view('Paginas.ConsultaHoteles');


    }

}


