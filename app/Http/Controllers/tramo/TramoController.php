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

        }

        $tramosValidados = $validator->validated();
        $tramosValidados['codigo_imagen'] = $this->guardarImagen($request);
        Tramo::create( $tramosValidados);

        return redirect('/tramo/registro');
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

        }

        $datosValidados = $validator->validated();

        Tramo::where('id', $idTramo)->update($datosValidados);

        return redirect('/tramo/vista_tramos');

    }


    public static function getValidacionesTramo() {
        return [
            'rutas_id'               => ['nullable'],
            'numero_tramo'           => ['nullable'],
            'tipo_terreno'           => ['nullable'],
            'estado_via'             => ['nullable'],
            'tipo_superficie'        => ['nullable'],
            'progresiva_inicial'     => ['nullable'],
            'progresiva_final'       => ['nullable'],
            'coor_x_inicial'         => ['nullable'],
            'coor_y_inicial'         => ['nullable'],
            'altitud_inicial'        => ['nullable'],
            'coor_x_final'           => ['nullable'],
            'coor_y_final'           => ['nullable'],
            'altitud_final'          => ['nullable'],
            'zona'                   => ['nullable'],
            'punto_notable'          => ['nullable'],
            'codigo_imagen'          => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'tramo_inicio'           => ['nullable'],
            'tramo_fin'              => ['nullable'],
            'numero_carriles'        => ['nullable'],
            'ancho_calzada'          => ['nullable'],
            'ancho_berma_izquierda'  => ['nullable'],
            'ancho_berma_derecha'    => ['nullable'],
            'identificacion_calzada' => ['nullable'],
            'observaciones'          => ['nullable']
        ];
    }

    public static function getValidacionesActualizarTramo() {
        return [
            'rutas_id'               => ['nullable'],
            'numero_tramo'           => ['nullable'],
            'tipo_terreno'           => ['nullable'],
            'estado_via'             => ['nullable'],
            'tipo_superficie'        => ['nullable'],
            'progresiva_inicial'     => ['nullable'],
            'progresiva_final'       => ['nullable'],
            'coor_x_inicial'         => ['nullable'],
            'coor_y_inicial'         => ['nullable'],
            'altitud_inicial'        => ['nullable'],
            'coor_x_final'           => ['nullable'],
            'coor_y_final'           => ['nullable'],
            'altitud_final'          => ['nullable'],
            'zona'                   => ['nullable'],
            'punto_notable'          => ['nullable'],
            'codigo_imagen'          => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'tramo_inicio'           => ['nullable'],
            'tramo_fin'              => ['nullable'],
            'numero_carriles'        => ['nullable'],
            'ancho_calzada'          => ['nullable'],
            'ancho_berma_izquierda'  => ['nullable'],
            'ancho_berma_derecha'    => ['nullable'],
            'identificacion_calzada' => ['nullable'],
            'observaciones'          => ['nullable']
        ];
    }


}
