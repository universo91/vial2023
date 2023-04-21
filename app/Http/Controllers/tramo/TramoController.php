<?php

namespace App\Http\Controllers\tramo;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class TramoController extends Controller
{
    public function registrar() {

        $departamentos = Departamento::get(['id', 'nombre']);
        return view('tramo.registro')->with( compact('departamentos') );
    }

    public function crear(Request $request) {

    }
}
