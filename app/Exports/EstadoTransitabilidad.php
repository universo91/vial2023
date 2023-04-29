<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class EstadoTransitabilidad implements FromView
{
    /**
    * @return \Illuminate\Contracts\View\View;
    */
    public function view() : View
    {
        $estadosTransitabilidad = DB::select('CALL SP_EstadoTransitabilidad');
        $collectEstadosTransitabilidad = collect( $estadosTransitabilidad );
        return view('formatos.estadoTransitabilidad')->with( compact('collectEstadosTransitabilidad'));
    }
}
