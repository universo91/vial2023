<?php

namespace App\Http\Controllers\tipo;

use App\Http\Controllers\Controller;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function getTipos($id) {
        $tipos = Tipo::where('clases_id', $id)->get(['id', 'nombre']);
        return $tipos;
    }
}
