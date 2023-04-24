<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superficie extends Model
{
    use HasFactory;

    protected $table = 'superficie';

    protected $fillable = [
        'rutas_id',
        'estado',
        'tipo_superficie',
        'ancho',
        'progresiva_inicial',
        'coor_inicial_x',
        'coor_inicial_y',
        'altitud_inicial',
        'progresiva_final',
        'coor_final_x',
        'coor_final_y',
        'altitud_final'
    ];

    public function tramo()
    {
        return $this->belongsTo(Tramo::class);
    }
}
