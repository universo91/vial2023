<?php

namespace App\Http\Controllers\puente;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class PuenteController extends Controller
{

    public function registrar() {

        $departamentos = Departamento::get(['id', 'nombre']);
        return view('puente.registro')->with( compact( 'departamentos') );
    }

    public function crear( Request $request) {

    }
}
