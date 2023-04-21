<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;

    protected $table = 'rutas';

    protected $fillable = [
        'codigo',
        'distritos_id',
        'punto_inicio',
        'coordenada_x_inicio',
        'coordenada_y_inicio',
        'punto_final',
        'coordenada_x_final',
        'coordenada_y_final',
        'altitud_punto_inicial',
        'altitud_punto_final',
        'progresiva_punto_inicial',
        'progresiva_punto_final',
    ];
}
