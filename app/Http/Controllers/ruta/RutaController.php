<?php

namespace App\Http\Controllers\ruta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Departamento;
use App\Models\Ruta;

class RutaController extends Controller
{
    public function index()
    {
        return view('ruta.index');
    }
    public function registrar() {
        $departamentos = Departamento::query(['id', 'nombre'])->get();
        //$departamentos = Departamento::get();
        //dd($departamentos);
        return view('ruta.registro')->with( compact('departamentos') );
    }

    public function getValidacionRuta() {
        return [
            'codigo'                    => ['required'],
            'distritos_id'              => ['required', 'numeric'],
            'punto_inicio'              => ['required', 'string', 'max:100'],
            'coordenada_x_inicio'       => ['required', 'numeric'],
            'coordenada_y_inicio'       => ['required', 'numeric'],
            'punto_final'               => ['required', 'string', 'max:100'],
            'coordenada_x_final'        => ['required', 'numeric'],
            'coordenada_y_final'        => ['required', 'numeric'],
            'altitud_punto_inicial'     => ['required', 'numeric'],
            'altitud_punto_final'       => ['required', 'numeric'],
            'progresiva_punto_inicial'  => ['required', 'string', 'max:20'],
            'progresiva_punto_final'    => ['required', 'string', 'max:20'],
        ];
    }

    public function crear(Request $request) {

        $validator = Validator::make($request->all(), $this->getValidacionRuta());

        if($validator->fails()) {

        }

        $datosDeRutaValidados = $validator->validated();

        Ruta::create( $datosDeRutaValidados );
        return redirect('/ruta/registro');
    }

    public function getRutas($id) {
        $rutas = Ruta::where('distritos_id', $id)->get(['id', 'codigo']);
        return $rutas;
    }
}
