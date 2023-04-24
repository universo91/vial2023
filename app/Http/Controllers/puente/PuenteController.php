<?php

namespace App\Http\Controllers\puente;

use App\Http\Controllers\Controller;
use App\Models\Clase;
use App\Models\Departamento;
use App\Models\Puente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PuenteController extends Controller
{

    public function registrar() {

        $departamentos = Departamento::get(['id', 'nombre']);
        $clasesPuente = Clase::get(['id', 'nombre']);
        return view('puente.registro')->with( compact( 'departamentos', 'clasesPuente') );
    }

    public function crear( Request $request) {

        $validator = Validator::make($request->all() , static::getValidacionCrearPuente() );

        if( $validator->fails() ) {

        }

        $datosValidados = $validator->validated();

        Puente::create( $datosValidados );

        return redirect('/puente/registro');
    }

    public static function getValidacionCrearPuente(){
        return [
            'tramos_id'           => ['required'],
            'coordenada_x'        => ['required'],
            'coordenada_y'        => ['required'],
            'altitud'             => ['required'],
            'tipos_id'            => ['required'],
            'numero_vias'         => ['required'],
            'tablero_rodadura'    => ['required'],
            'longitud'            => ['required'],
            'ancho_calzada'       => ['required'],
            'condicion_funcional' => ['required'],
            'hidrografia'         => ['required']
        ];
    }
}
