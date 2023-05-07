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

    public function tramos()
    {
        return $this->hasMany(Tramo::class);
    }

    public function senializaciones()
    {
        return $this->hasMany(Senializacion::class, 'rutas_id');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'distritos_id');
    }

    public function puentes()
    {
        return $this->hasMany(Puente::class, 'rutas_id');
    }
}
