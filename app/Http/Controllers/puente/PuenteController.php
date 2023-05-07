<?php

namespace App\Http\Controllers\puente;

use App\Http\Controllers\Controller;
use App\Models\Clase;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Puente;
use App\Models\Ruta;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PuenteController extends Controller
{

    public function listaPuentes()
    {
        $puentes = Puente::with('ruta.distrito.provincia:id,nombre', 'tipo.clase')->get();
        return view('puente.index', compact('puentes'));
    }

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

    public function editarPuente($idPuente)
    {
        $puente = Puente::findOrFail($idPuente);
        $ruta = Ruta::findOrFail($puente->rutas_id);
        $rutas = Ruta::where('distritos_id', $ruta->distritos_id)->get(['id', 'codigo', 'distritos_id']);
        $distrito = Distrito::findOrFail($ruta->distritos_id);
        $distritos = Distrito::where('provincias_id', $distrito->provincias_id)->get(['id', 'nombre']);
        $provincia = Provincia::findOrFail($distrito->provincias_id);
        $provincias = Provincia::where('departamentos_id', $provincia->departamentos_id)->get(['id', 'nombre']);
        $departamentos = Departamento::get(['id', 'nombre']);

        $tipo = Tipo::findOrFail($puente->tipos_id);
        $tipos = Tipo::where('clases_id', $tipo->clases_id)->get(['id', 'nombre']);
        $clases = Clase::get(['id', 'nombre']);

        return view('puente.editar')->with( compact('puente', 'ruta', 'rutas', 'distrito', 'distritos', 'provincia', 'provincias', 'departamentos', 'tipo', 'tipos', 'clases'));
    }

    public static function getValidacionCrearPuente(){
        return [
            'rutas_id'            => ['required'],
            'progresiva'          => ['required'],
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
