<?php

namespace App\Http\Controllers\senial;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Senializacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SenializacionController extends Controller
{
    public function registrar() {

        $departamentos = Departamento::get(['id', 'nombre']);

        return view('senializacion.registro')->with( compact('departamentos') );
    }

    public function crear(Request $request) {

        $validator = Validator::make( $request->all(), static::getValidacionCrearSenializacion() );

        if( $validator->fails() ) {

        }

        $datosValidados = $validator->validated();

        Senializacion::create( $datosValidados );
        return redirect('/senializacion/registro');
    }

    public static function getValidacionCrearSenializacion() {
        return [
            'rutas_id'      => ['required'],
            'senial'        => ['required'],
            'clasificacion' => ['required'],
            'progresiva'    => ['required'],
            'lado'          => ['required'],
            'soporte'       => ['required'],
            'material'      => ['required'],
            'zona'          => ['required'],
            'coordenada_x'  => ['required'],
            'coordenada_y'  => ['required'],
            'altitud'       => ['required'],
        ];
    }
}
