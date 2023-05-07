<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'clases_id');
    }

    public function puentes()
    {
        return $this->hasMany( Puente::class, 'tipos_id');
    }
}
