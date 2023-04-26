<?php

namespace App\Http\Controllers\reportes;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function getDatosReferenciamiento()
    {
        $datosReferenciamiento =  DB::select('CALL SP_FormatoReferenciamiento');

        return view('reportes.georeferenciamiento', compact('datosReferenciamiento'));
    }

    public function getItinerarioRutas()
    {
        $itinerarioRutas = DB::select('CALL SP_ItinerarioRutas');
        return view('reportes.itinerario')->with( compact('itinerarioRutas'));
    }

    public function getSuperficieRodadura()
    {
        $supRodaduras = DB::select('CALL SP_SuperficieRodadura');
        return view('reportes.superficieRodadura')->with( compact('supRodaduras') );
    }

    public function getTipoSuperficie()
    {
        $tiposSuperficie = DB::select('CALL SP_TipoSuperficie');
        return view('reportes.tipoSuperficie', compact('tiposSuperficie') );
    }

    public function getEstadoTransitabilidad()
    {
        $estadosTransitabilidad = DB::select('CALL SP_EstadoTransitabilidad');
        return view('reportes.estadoTransitabilidad')->with( compact('estadosTransitabilidad'));
    }

    public function getPlataforma()
    {
        $datosPlataforma = DB::select('CALL SP_plataforma');
        return view('reportes.plataforma')->with( compact('datosPlataforma'));
    }

    public function getSenializacion()
    {
        $datosSenializacion = DB::select('CALL SP_Senializacion');
        return view('reportes.senializacion', compact('datosSenializacion'));
    }

    public function getPuentes()
    {
        $datosPuente = DB::select('CALL SP_Puentes');
        return view('reportes.puente')->with(compact('datosPuente'));
    }

}
