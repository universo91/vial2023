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

        }

        $datosValidados = $validator->validated();

        Superficie::create($datosValidados);

        return redirect('/superficie/registro');
    }

    public function actualizarSuperficie(Request $request, $idSuperfice)
    {
        $validator = Validator::make($request->all(), static::getValidacionActualizarSuperficie());

        if($validator->fails())
        {

        }

        $datosValidados = $validator->validated();

        Superficie::where('id', $idSuperfice)->update($datosValidados);

        return redirect('/superficie/vista_superficies');
    }

    public static function getValidacionSuperficie()
    {
        return [
            'tramos_id' => ['required',],
            'estado' => ['required',],
            'tipo_superficie' => ['required',],
            'ancho' => ['required',],
            'progresiva_inicial' => ['required',],
            'coor_inicial_x' => ['required',],
            'coor_inicial_y' => ['required',],
            'altitud_inicial' => ['required',],
            'progresiva_final' => ['required',],
            'coor_final_x' => ['required',],
            'coor_final_y' => ['required',],
            'altitud_final' => ['required',]
        ];
    }

    public static function getValidacionActualizarSuperficie()
    {
        return [
            'tramos_id' => ['required',],
            'estado' => ['required',],
            'tipo_superficie' => ['required',],
            'ancho' => ['required',],
            'progresiva_inicial' => ['required',],
            'coor_inicial_x' => ['required',],
            'coor_inicial_y' => ['required',],
            'altitud_inicial' => ['required',],
            'progresiva_final' => ['required',],
            'coor_final_x' => ['required',],
            'coor_final_y' => ['required',],
            'altitud_final' => ['required',]
        ];
    }


}
