<?php

namespace App\Http\Controllers\distrito;

use App\Http\Controllers\Controller;
use App\Models\Distrito;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    public function getDistritos($id) {

        $distritos = Distrito::where('provincias_id', $id)->get(['id', 'nombre', 'ubigeo']);
        return $distritos;
    }
}
