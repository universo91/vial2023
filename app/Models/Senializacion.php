<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senializacion extends Model
{
    use HasFactory;

    protected $table = 'senializaciones';

    protected $fillable = [
        'rutas_id',
        'senial',
        'clasificacion',
        'progresiva',
        'lado',
        'soporte',
        'material',
        'zona',
        'coordenada_x',
        'coordenada_y',
        'altitud'
    ];

    public function ruta()
    {
        return $this->belongsTo(Ruta::class, 'rutas_id');
    }
}
