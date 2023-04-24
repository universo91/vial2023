<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';

    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
