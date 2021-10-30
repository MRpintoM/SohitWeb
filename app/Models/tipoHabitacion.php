<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tipoHabitacion extends Model
{
    use HasFactory;

    protected $table = 'tipo_habitacion';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'id_tipo';
}
