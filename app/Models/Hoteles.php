<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoteles
{
    protected $table='hotel';
    public $timestamps=false;
    protected $fillable=[
        'id_estudiante', 'nombre', 'apellido', 'carnet', 'direccion', 'telefono','genero', 'fecha'
    ];

    protected $primaryKey='id_estudiante';


}
