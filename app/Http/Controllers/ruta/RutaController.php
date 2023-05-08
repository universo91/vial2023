<?php

namespace App\Http\Controllers\ruta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
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

    public function listaRutas() {
        $rutas = Ruta::with('distrito.provincia.departamento:id,nombre')->get();
        return view('ruta.index', compact('rutas'));
    }

    public function editarRuta($idRuta)
    {
        $ruta = Ruta::findOrFail($idRuta);
        $distrito = Distrito::findOrFail($ruta->distritos_id);
        $distritos = Distrito::where('provincias_id', $distrito->provincias_id)->get(['id', 'nombre']);
        $provincia = Provincia::findOrFail($distrito->provincias_id);
        $provincias = Provincia::where('departamentos_id', $provincia->departamentos_id)->get(['id', 'nombre']);
        $departamentos = Departamento::get(['id', 'nombre']);
        return view('ruta.editar')->with( compact('ruta', 'distrito', 'distritos', 'provincia', 'provincias', 'departamentos'));

    }

    public static function getValidacionRuta() {
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

    public static function getValidacionActualizarRuta() {
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

        $validator = Validator::make($request->all(), static::getValidacionRuta());

        if($validator->fails()) {

        }

        $datosDeRutaValidados = $validator->validated();

        Ruta::create( $datosDeRutaValidados );
        return redirect('/ruta/registro');
    }

    public function actualizarRuta(Request $request, $idRuta)
    {
        $validator = Validator::make($request->all(), static::getValidacionActualizarRuta() );

        if( $validator->fails())
        {

        }

        $datosValidados = $validator->validated();

        Ruta::where('id', $idRuta)->update($datosValidados);

        return redirect('/ruta/vista_rutas');
    }

    public function getRutas($id) {
        $rutas = Ruta::where('distritos_id', $id)->get(['id', 'codigo']);
        return $rutas;
    }
}
