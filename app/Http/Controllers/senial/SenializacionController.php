<?php

namespace App\Http\Controllers\senial;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class SenializacionController extends Controller
{
    public function registrar() {

        $departamentos = Departamento::get(['id', 'nombre']);

        return view('senializacion.registro')->with( compact('departamentos') );
    }

    public function crear(Request $request) {

    }
}
