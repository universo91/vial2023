<?php

namespace App\Http\Controllers\superficie;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Superficie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuperficieController extends Controller
{
    public function registrar()
    {
        $departamentos = Departamento::get(['id', 'nombre']);
        return view('superficie.registro')->with( compact('departamentos'));
    }

    public function crear(Request $request) {
        $validator = Validator::make($request->all(), static::getValidacionSuperficie());

        if($validator->fails()) {

        }

        $datosValidados = $validator->validated();

        Superficie::create($datosValidados);

        return redirect('/superficie/registro');
    }

    public static function getValidacionSuperficie() {
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
