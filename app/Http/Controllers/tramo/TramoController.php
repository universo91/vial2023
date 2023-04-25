<?php

namespace App\Http\Controllers\tramo;

use App\Http\Controllers\Controller;
use App\Models\Clase;
use App\Models\Departamento;
use App\Models\Tramo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TramoController extends Controller
{
    public static function getValidacionesTramo() {
        return [
            'rutas_id'               => ['required'],
            'numero_tramo'           => ['required'],
            'tipo_terreno'           => ['required'],
            'estado_via'             => ['required'],
            'tipo_superficie'        => ['required'],
            'progresiva_inicial'     => ['required'],
            'progresiva_final'       => ['required'],
            'coor_x_inicial'         => ['required'],
            'coor_y_inicial'         => ['required'],
            'altitud_inicial'        => ['required'],
            'coor_x_final'           => ['required'],
            'coor_y_final'           => ['required'],
            'altitud_final'          => ['required'],
            'zona'                   => ['required'],
            'descripcion_elementos'  => ['required'],
            'codigo_imagen'          => ['required'],
            'tramo_inicio'           => ['required'],
            'tramo_fin'              => ['required'],
            'numero_carriles'        => ['required'],
            'ancho_calzada'          => ['required'],
            'ancho_berma_izquierda'  => ['required'],
            'ancho_berma_derecha'    => ['required'],
            'identificacion_calzada' => ['required'],
            'observaciones'          => ['required']
        ];
    }

    public function registrar() {

        $departamentos = Departamento::get(['id', 'nombre']);

        return view('tramo.registro')->with( compact('departamentos') );

        //otra forma
        //return view('tramo.registro', compact('departamentos', 'clasesPuente') );
    }

    public function crear(Request $request) {

        $validator = Validator::make( $request->all(), static::getValidacionesTramo() );

        if( $validator->fails() ) {

        }

        $tramosValidados = $validator->validated();

        Tramo::create( $tramosValidados);

        return redirect('/tramo/registro');
    }

    public function getTramos($id) {
        $tramos = Tramo::where('rutas_id', $id)->get(['id', 'numero_tramo']);
        return $tramos;
    }


}
