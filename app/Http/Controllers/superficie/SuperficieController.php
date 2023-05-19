<?php

namespace App\Http\Controllers\superficie;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Ruta;
use App\Models\Superficie;
use App\Models\Tramo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuperficieController extends Controller
{

    public function listaSuperficies()
    {
        $superficies = Superficie::with('tramo.ruta.distrito.provincia:id,nombre')->get();
        return view('superficie.index')->with( compact('superficies') );
    }

    public function editarSuperficie($idSuperficie)
    {
        //Devuelve una instancia de modelo
        $superficie = Superficie::findOrFail($idSuperficie);
        $tramo = Tramo::findOrFail($superficie->tramos_id);
        $tramos = Tramo::where('rutas_id', $tramo->rutas_id)->get(['id', 'numero_tramo']);
        $ruta = Ruta::findOrFail($tramo->rutas_id);

        //Devuelve un collection
        $rutas = Ruta::where('distritos_id', $ruta->distritos_id)->get(['id', 'codigo', 'distritos_id']);
        $distrito = Distrito::findOrFail($ruta->distritos_id);
        $distritos = Distrito::where('provincias_id', $distrito->provincias_id)->get(['id', 'nombre']);
        $provincia = Provincia::findOrFail($distrito->provincias_id);
        $provincias = Provincia::where('departamentos_id', $provincia->departamentos_id)->get(['id', 'nombre']);
        $departamentos = Departamento::get(['id', 'nombre']);

        return view('superficie.editar')->with( compact('superficie', 'tramo','tramos', 'ruta', 'rutas', 'distrito', 'distritos', 'provincia', 'provincias', 'departamentos'));

    }

    public function registrar()
    {
        $departamentos = Departamento::get(['id', 'nombre']);
        return view('superficie.registro')->with( compact('departamentos'));
    }

    public function crear(Request $request)
    {
        $validator = Validator::make($request->all(), static::getValidacionSuperficie());

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $datosValidados = $validator->validated();

        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Superficie::create($datosValidados);

        return redirect('/superficie/vista_superficies')->with('creado', 'Superficie registrado correctamente');
    }

    public function actualizarSuperficie(Request $request, $idSuperfice)
    {
        $validator = Validator::make($request->all(), static::getValidacionActualizarSuperficie());

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $datosValidados = $validator->validated();

        if( $request->file('codigo_imagen') )
        {
            $datosValidados['codigo_imagen'] = $this->guardarImagen($request);
        }

        Superficie::where('id', $idSuperfice)->update($datosValidados);

        return redirect('/superficie/vista_superficies')->with('actualizado', 'Superficie actualizado correctamente');
    }

    public static function getValidacionSuperficie()
    {
        return [
            'tramos_id'          => ['required',],
            'estado'             => ['required', 'string'],
            'tipo_superficie'    => ['required', 'string'],
            'ancho'              => ['required', 'numeric'],
            'codigo_imagen'      => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'progresiva_inicial' => ['required', 'regex:/^\d+\+\d+$/'],
            'coor_inicial_x'     => ['required', 'numeric'],
            'coor_inicial_y'     => ['required', 'numeric'],
            'altitud_inicial'    => ['required', 'numeric'],
            'progresiva_final'   => ['required', 'regex:/^\d+\+\d+$/'],
            'coor_final_x'       => ['required', 'numeric'],
            'coor_final_y'       => ['required', 'numeric'],
            'altitud_final'      => ['required', 'numeric']
        ];
    }

    public static function getValidacionActualizarSuperficie()
    {
        return [
            'tramos_id'          => ['required',],
            'estado'             => ['required', 'string'],
            'tipo_superficie'    => ['required', 'string'],
            'ancho'              => ['required', 'numeric'],
            'codigo_imagen'      => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'progresiva_inicial' => ['required', 'regex:/^\d+\+\d+$/'],
            'coor_inicial_x'     => ['required', 'numeric'],
            'coor_inicial_y'     => ['required', 'numeric'],
            'altitud_inicial'    => ['required', 'numeric'],
            'progresiva_final'   => ['required', 'regex:/^\d+\+\d+$/'],
            'coor_final_x'       => ['required', 'numeric'],
            'coor_final_y'       => ['required', 'numeric'],
            'altitud_final'      => ['required', 'numeric']
        ];
    }


}
