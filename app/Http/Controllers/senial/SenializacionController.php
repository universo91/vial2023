<?php

namespace App\Http\Controllers\senial;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Ruta;
use App\Models\Senializacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SenializacionController extends Controller
{

    public function listaSenializaciones()
    {
        $senializaciones = Senializacion::with('ruta.distrito.provincia.departamento:id,nombre')->get();
        return view('senializacion.index', compact('senializaciones'));
    }

    public function editarSenializacion($idSenializacion)
    {
        $senializacion = Senializacion::findOrFail($idSenializacion);
        $ruta = Ruta::findOrFail($senializacion->rutas_id);
        $rutas = Ruta::where('distritos_id', $ruta->distritos_id)->get(['id', 'codigo', 'distritos_id']);
        $distrito = Distrito::findOrFail($ruta->distritos_id);
        $distritos = Distrito::where('provincias_id', $distrito->provincias_id)->get(['id', 'nombre']);
        $provincia = Provincia::findOrFail($distrito->provincias_id);
        $provincias = Provincia::where('departamentos_id', $provincia->departamentos_id)->get(['id', 'nombre']);
        $departamentos = Departamento::get(['id', 'nombre']);

        return view('senializacion.editar')->with( compact('senializacion', 'ruta', 'rutas', 'distrito', 'distritos', 'provincia', 'provincias', 'departamentos'));
    }

    public function registrar() {

        $departamentos = Departamento::get(['id', 'nombre']);

        return view('senializacion.registro')->with( compact('departamentos') );
    }

    public function crear(Request $request) {

        $validator = Validator::make( $request->all(), static::getValidacionCrearSenializacion() );

        if( $validator->fails() ) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $datosValidados = $validator->validated();

        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Senializacion::create( $datosValidados );

        return redirect('/senializaciom/vista_senializaciones')->with('creado', 'Señalizacion registrado correctamente ');
    }

    public function actualizarSenializacion(Request $request, $idSenializacion)
    {
        $validator = Validator::make($request->all(), static::getValidacionActualizarSenializacion());
        /* dd( $validator ); */
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $datosValidados = $validator->validated();

        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Senializacion::where('id', $idSenializacion)->update($datosValidados);

        return redirect('/senializaciom/vista_senializaciones')->with('actualizado', 'Señalizacion actualizado correctamente');
    }


    public static function getValidacionCrearSenializacion() {
        return [
            'rutas_id'      => ['required'],
            'senial'        => ['nullable', 'string'],
            'clasificacion' => ['nullable', 'string'],
            'progresiva'    => ['nullable', 'regex:/^\d+\+\d+$/'],
            'codigo_imagen' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096'],
            'lado'          => ['nullable', 'string'],
            'soporte'       => ['nullable', 'string'],
            'material'      => ['nullable', 'string'],
            'zona'          => ['nullable', 'string'],
            'coordenada_x'  => ['nullable', 'numeric'],
            'coordenada_y'  => ['nullable', 'numeric'],
            'altitud'       => ['nullable', 'numeric'],
        ];
    }

    public static function getValidacionActualizarSenializacion() {
        return [
            'rutas_id'      => ['required'],
            'senial'        => ['nullable', 'string'],
            'clasificacion' => ['nullable', 'string'],
            'progresiva'    => ['nullable', 'regex:/^\d+\+\d+$/'],
            'codigo_imagen' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096'],
            'lado'          => ['nullable', 'string'],
            'soporte'       => ['nullable', 'string'],
            'material'      => ['nullable', 'string'],
            'zona'          => ['nullable', 'string'],
            'coordenada_x'  => ['nullable', 'numeric'],
            'coordenada_y'  => ['nullable', 'numeric'],
            'altitud'       => ['nullable', 'numeric'],
        ];
    }
}
