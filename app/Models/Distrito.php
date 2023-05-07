<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $table = 'distritos';

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincias_id');
    }

    public function rutas()
    {
        return $this->hasMany(Ruta::class, 'distritos_id');
    }
}
