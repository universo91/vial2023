<?php

namespace App\Http\Controllers\tramo;

use App\Http\Controllers\Controller;
use App\Models\Clase;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Ruta;
use App\Models\Tramo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TramoController extends Controller
{

    private $disk = 'public';

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

    public function listaTramos()
    {
        $tramos = Tramo::with('ruta.distrito.provincia.departamento:id,nombre')->get();
       /*  dd($tramos); */
        return view('tramo.index')->with( compact('tramos') );
    }

    public function editarTramo($id)
    {
        $tramo = Tramo::findOrFail($id);
        $ruta = Ruta::where('id', $tramo->rutas_id)->get(['id', 'codigo', 'distritos_id']);
        $rutas = Ruta::where('distritos_id', $ruta->distritos_id)->get(['id', 'codigo', 'distritos_id']);
        $distrito = Distrito::where('id', $ruta->distritos_id)->get(['id', 'nombre', 'provincias_id']);
        $distritos = Distrito::where('provincias_id', $distrito->privincias_id)->get(['id', 'nombre']);
        $provincia = Provincia::where('id', $distrito->provincias_id)->get(['id', 'nombre', 'departamentos_id']);
        $provincias = Provincia::where('departamentos_id', $provincia->departamentos_id)->get(['id', 'nombre']);
        $departamentos = Departamento::get(['id', 'nombre']);
        return view('tramo.index')->with( compact('tramo', 'ruta', 'rutas', 'distrito', 'distritos', 'provincia', 'provincias', 'departamentos'));
        dd($ruta);

        /* $developer->skills()->where('name', 'PHP')->get()
        $user = User::with('comments')->find(1);
        $departamentos = Departamento::get(['id', 'nombre']);
        $pr */

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
        $tramosValidados['codigo_imagen'] = static::guardarImagen($request);
        Tramo::create( $tramosValidados);

        return redirect('/tramo/registro');
    }

    public function getTramos($id) {
        $tramos = Tramo::where('rutas_id', $id)->get(['id', 'numero_tramo']);
        return $tramos;
    }

    private function guardarImagen(Request $request)
    {
        //Obtenemos la imagen
        $imagen = $request->file('codigo_imagen');

        //Obtenemos el nombre de la imagen, y si este tuvira espacios, lo reemplazamo con guiones, por medio
        // del metodo slug
        $nombreImagen = Str::slug( $request->file('codigo_imagen')->getClientOriginalName() );

        //Renombramos la imagen
        $nuevoNombreImagen = Str::random(16) . '_' . $nombreImagen;

        //Le indicamos que guarde en storage, dentro del disk public, en una carpeta imagenes.
        $ruta = $imagen->storeAs('/imagenes', $nuevoNombreImagen.".".$imagen->extension(), $this->disk);

        //
        $urlImagen = Storage::url($ruta);
        return $urlImagen;
    }


}
