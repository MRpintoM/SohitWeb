<?php


namespace App\Http\Controllers;

use App\Models\EstadoHabitacion;
use App\Models\Habitacion;
use App\Models\Hotel;
use App\Models\tipoHabitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController
{
    /* Datos para Hoteles */
    public function mostrar()
    {
        $hoteles = Hotel::all();
        return view('Paginas.ConsultaHoteles', compact('hoteles'));
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'nombre_hotel' => 'required',
            'direccion' => 'required',
            'tipo_hotel' => 'required',
        ]);
        $hotel = new Hotel;
        $hotel->direccion = $data['direccion'];
        $hotel->nombre_hotel = $data['nombre_hotel'];
        $hotel->tipo_hotel = $data['tipo_hotel'];
        $lastItem = Hotel::all()->sortByDesc("id_hotel")->first();
        if (is_null($lastItem)) {
            $hotel->id_hotel = 1;
        } else {
            $hotel->id_hotel  = $lastItem->id_hotel + 1;
        }
        $hotel->save();
        return redirect()->route('mostrar');
    }
    public function delete($id)
    {
        Hotel::find($id)->delete();
        return redirect()->route('mostrar');
    }
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('Paginas.editarHotel', compact('hotel'));
    }
    public function update(Request $request)
    {
        $hotelId = $request->id_hotel;
        $data = $request->validate([
            'nombre_hotel' => 'required',
            'direccion' => 'required',
            'tipo_hotel' => 'required',
        ]);
        $hotel = Hotel::find($hotelId);
        $hotel->update($data);
        return redirect()->route('mostrar');
    }

    /* Datos para Tipo de Habitacion */

    public function createTipo(Request $request)
    {
        $data = $request->validate([
            'descripcion' => 'required',

        ]);
        $tipoHab = new tipoHabitacion;
        $tipoHab->descripcion = $data['descripcion'];
        $lastItem = tipoHabitacion::all()->sortByDesc("id_tipo")->first();
        if (is_null($lastItem)) {
            $tipoHab->id_tipo = 1;
        } else {
            $tipoHab->id_tipo  = $lastItem->id_tipo + 1;
        }
        $tipoHab->save();
        return redirect()->route('mostrar');
    }

    /* Datos para Estado de Habitacion */
    public function createEstado(Request $request)
    {
        $data = $request->validate([
            'estado' => 'required',

        ]);
        $estado = new EstadoHabitacion;
        $estado->estado = $data['estado'];

        $lastItem = EstadoHabitacion::all()->sortByDesc("id_hbs")->first();
        if (is_null($lastItem)) {
            $estado->id_hbs = 1;
        } else {
            $estado->id_hbs  = $lastItem->id_hbs + 1;
        }
        $estado->save();
        return redirect()->route('mostrar');
    }

    /* Datos para Habitacion */
    public function mostrarhabit()
    {
        $habitaciones = DB::table('habitacion')->join('tipo_habitacion','tipo_habitacion.id_tipo','=','habitacion.tipo_habitacion_id_tipo')
            ->join('estado_habitacion','estado_habitacion.id_hbs','=','habitacion.estado_habitacion_id_hbs')
            ->select('habitacion.*','tipo_habitacion.descripcion as tipo','estado_habitacion.estado as estado')
            ->get();
        return view('Paginas.ConsultaHabitaciones', compact('habitaciones'));
    }
    public function createHab(Request $request)
    {
        $data = $request->validate([
            'numero' => 'required',
            'precio' => 'required',
            'cantidad_huespe' => 'required',
            'camas' => 'required',
            'tipoHabitacion' => 'required',
            'estado' => 'required',

        ]);
        $habitacion = new Habitacion;
        $habitacion->numero = $data['numero'];
        $habitacion->precio = $data['precio'];
        $habitacion->cantidad_huespe = $data['cantidad_huespe'];
        $habitacion->camas = $data['camas'];
        $habitacion->tipo_habitacion_id_tipo = $data['tipoHabitacion'];
        $habitacion->estado_habitacion_id_hbs = $data['estado'];

        $lastItem = Habitacion::all()->sortByDesc("id_habitacion")->first();
        if (is_null($lastItem)) {
            $habitacion->id_habitacion = 1;
        } else {
            $habitacion->id_habitacion  = $lastItem->id_habitacion + 1;
        }
        $habitacion->save();
        return redirect()->route('mostrarhabit');
    }


}
