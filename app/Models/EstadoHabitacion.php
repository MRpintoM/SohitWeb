<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoHabitacion extends  Model
{
    use HasFactory;

    protected $table = 'estado_habitacion';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_hbs';


}
