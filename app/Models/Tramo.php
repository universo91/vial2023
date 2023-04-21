<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramo extends Model
{
    use HasFactory;

    protected $table = 'tramos';

    protected $fillable = [
        'rutas_id',
        'numero_tramo',
        'tipo_terreno',
        'estado_via',
        'tipo_superficie',
        'ancho_plataforma',
        'progresiva',
        'coor_x_inicial',
        'coor_y_inicial',
        'altitud_inicial',
        'coor_x_final',
        'coor_y_final',
        'altitud_final',
        'zona',
        'descripcion_elementos',
        'codigo_imagen',
        'tramo_inicio',
        'tramo_fin',
        'numero_carriles',
        'ancho_calzada',
        'ancho_berma_izquierda',
        'ancho_berma_derecha',
        'identificacion_calzada',
        'observaciones'
    ];
}
