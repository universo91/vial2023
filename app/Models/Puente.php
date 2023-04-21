<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puente extends Model
{
    use HasFactory;

    protected $table = 'puentes';

    protected $fillable = [
        'tramos_id',
        'coordenada_x',
        'coordenada_y',
        'altitud',
        'tipos_id',
        'numero_vias',
        'tablero_rodadura',
        'longitud',
        'ancho_calzada',
        'condicion_funcional',
        'hidrografia'
    ];
}
