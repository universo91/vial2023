<?php

namespace App\Http\Controllers\tramo;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Ruta;
use App\Models\Tramo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TramoController extends Controller
{

    public function listaTramos()
    {
        $tramos = Tramo::with('ruta.distrito.provincia.departamento:id,nombre')->get();
       /*  dd($tramos); */
        return view('tramo.index')->with( compact('tramos') );
    }

    public function editarTramo($id)
    {
        $tramo = Tramo::findOrFail($id);
        $ruta = Ruta::findOrFail($tramo->rutas_id);
        $rutas = Ruta::where('distritos_id', $ruta->distritos_id)->get(['id', 'codigo', 'distritos_id']);
        $distrito = Distrito::findOrFail($ruta->distritos_id);
        $distritos = Distrito::where('provincias_id', $distrito->provincias_id)->get(['id', 'nombre']);
        $provincia = Provincia::findOrFail($distrito->provincias_id);
        $provincias = Provincia::where('departamentos_id', $provincia->departamentos_id)->get(['id', 'nombre']);
        $departamentos = Departamento::get(['id', 'nombre']);
        return view('tramo.editar')->with( compact('tramo', 'ruta', 'rutas', 'distrito', 'distritos', 'provincia', 'provincias', 'departamentos'));

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
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tramosValidados = $validator->validated();

        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Tramo::create( $tramosValidados);

        return redirect('/tramo/vista_tramos')->with('creado', 'Tramo registrado correctamente');
    }

    public function getTramos($id) {
        $tramos = Tramo::where('rutas_id', $id)->get(['id', 'numero_tramo']);
        return $tramos;
    }

    public function actualizarTramo(Request $request, $idTramo)
    {
        $validator = Validator::make($request->all(), static::getValidacionesActualizarTramo());

        if( $validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $datosValidados = $validator->validated();

        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Tramo::where('id', $idTramo)->update($datosValidados);

        return redirect('/tramo/vista_tramos')->with('actualizado', 'Tramo actualizado correctamente');

    }


    public static function getValidacionesTramo() {
        return [
            'rutas_id'               => ['required', 'exists:rutas,id'],
            'numero_tramo'           => ['integer'],
            'tipo_terreno'           => ['nullable', 'string'],
            'estado_via'             => ['nullable', 'string'],
            'tipo_superficie'        => ['nullable', 'string'],
            'progresiva_inicial'     => ['nullable','regex:/^\d+\+\d+$/'],
            'progresiva_final'       => ['nullable','regex:/^\d+\+\d+$/'],
            'coor_x_inicial'         => ['nullable', 'numeric'],
            'coor_y_inicial'         => ['nullable', 'numeric'],
            'altitud_inicial'        => ['nullable', 'numeric'],
            'coor_x_final'           => ['nullable', 'numeric'],
            'coor_y_final'           => ['nullable', 'numeric'],
            'altitud_final'          => ['nullable', 'numeric'],
            'zona'                   => ['nullable', 'string'],
            'punto_notable'          => ['nullable', 'string', 'max:255'],
            'codigo_imagen'          => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096'],
            'tramo_inicio'           => ['nullable', 'string', 'max:255'],
            'tramo_fin'              => ['nullable', 'string', 'max: 255'],
            'numero_carriles'        => ['nullable', 'integer'],
            'ancho_calzada'          => ['nullable', 'numeric'],
            'ancho_berma_izquierda'  => ['nullable', 'numeric'],
            'ancho_berma_derecha'    => ['nullable', 'numeric'],
            'identificacion_calzada' => ['nullable', 'string'],
            'observaciones'          => ['nullable', 'string', 'max:255']
        ];
    }

    public static function getValidacionesActualizarTramo() {
        return [
            'rutas_id'               => ['required', 'exists:rutas,id'],
            'numero_tramo'           => ['integer'],
            'tipo_terreno'           => ['nullable', 'string'],
            'estado_via'             => ['nullable', 'string'],
            'tipo_superficie'        => ['nullable', 'string'],
            'progresiva_inicial'     => ['nullable','regex:/^\d+\+\d+$/'],
            'progresiva_final'       => ['nullable','regex:/^\d+\+\d+$/'],
            'coor_x_inicial'         => ['nullable', 'numeric'],
            'coor_y_inicial'         => ['nullable', 'numeric'],
            'altitud_inicial'        => ['nullable', 'numeric'],
            'coor_x_final'           => ['nullable', 'numeric'],
            'coor_y_final'           => ['nullable', 'numeric'],
            'altitud_final'          => ['nullable', 'numeric'],
            'zona'                   => ['nullable', 'string'],
            'punto_notable'          => ['nullable', 'string', 'max:255'],
            'codigo_imagen'          => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096'],
            'tramo_inicio'           => ['nullable', 'string', 'max:255'],
            'tramo_fin'              => ['nullable', 'string', 'max: 255'],
            'numero_carriles'        => ['nullable', 'integer'],
            'ancho_calzada'          => ['nullable', 'numeric'],
            'ancho_berma_izquierda'  => ['nullable', 'numeric'],
            'ancho_berma_derecha'    => ['nullable', 'numeric'],
            'identificacion_calzada' => ['nullable', 'string'],
            'observaciones'          => ['nullable', 'string', 'max:255']
        ];
    }


}
