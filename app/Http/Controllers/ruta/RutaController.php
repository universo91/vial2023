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
            'codigo'                    => ['required', 'unique:rutas,codigo'],
            'distritos_id'              => ['nullable', 'numeric'],
            'punto_inicio'              => ['nullable', 'string', 'max:150'],
            'codigo_imagen'             => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'coordenada_x_inicio'       => ['nullable', 'numeric'],
            'coordenada_y_inicio'       => ['nullable', 'numeric'],
            'punto_final'               => ['nullable', 'string', 'max:150'],
            'coordenada_x_final'        => ['nullable', 'numeric'],
            'coordenada_y_final'        => ['nullable', 'numeric'],
            'altitud_punto_inicial'     => ['nullable', 'numeric'],
            'altitud_punto_final'       => ['nullable', 'numeric'],
            'progresiva_punto_inicial'  => ['nullable', 'regex:/^\d+\+\d+$/'],
            'progresiva_punto_final'    => ['nullable', 'regex:/^\d+\+\d+$/'],
        ];
    }

    public static function getValidacionActualizarRuta($id = null) {
        return [
            'codigo'                    => ['required', 'unique:rutas,codigo,' . $id ],
            'distritos_id'              => ['nullable', 'numeric'],
            'punto_inicio'              => ['nullable', 'string', 'max:150'],
            'codigo_imagen'             => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'coordenada_x_inicio'       => ['nullable', 'numeric'],
            'coordenada_y_inicio'       => ['nullable', 'numeric'],
            'punto_final'               => ['nullable', 'string', 'max:150'],
            'coordenada_x_final'        => ['nullable', 'numeric'],
            'coordenada_y_final'        => ['nullable', 'numeric'],
            'altitud_punto_inicial'     => ['nullable', 'numeric'],
            'altitud_punto_final'       => ['nullable', 'numeric'],
            'progresiva_punto_inicial'  => ['nullable', 'regex:/^\d+\+\d+$/'],
            'progresiva_punto_final'    => ['nullable', 'regex:/^\d+\+\d+$/'],
        ];
    }

    public function crear(Request $request) {

        $validator = Validator::make($request->all(), static::getValidacionRuta());

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $datosValidados = $validator->validated();


        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Ruta::create( $datosValidados );

        return redirect('/ruta/vista_rutas')->with('creado', 'Ruta registrado correctamente');
    }

    public function actualizarRuta(Request $request, $idRuta)
    {
        $validator = Validator::make($request->all(), static::getValidacionActualizarRuta($idRuta) );
        /* dd($validator); */
        if( $validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $datosValidados = $validator->validated();

        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Ruta::where('id', $idRuta)->update($datosValidados);

        return redirect('/ruta/vista_rutas')->with('actualizado', 'Ruta actualizado correctamente');
    }

    public function getRutas($id) {
        $rutas = Ruta::where('distritos_id', $id)->get(['id', 'codigo']);
        return $rutas;
    }
}
