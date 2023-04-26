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
        $supRodadura = DB::select('CALL SP_SuperficieRodadura');
        return view('reportes.supRodadura')->with( compact('supRodadura') );
    }

    public function getTipoSuperficie()
    {
        $tipoSuperficie = DB::select('CALL SP_TipoSuperficie');
        return view('reportes.tipoSuperficie', compact('tipoSuperficie') );
    }




    public function getPlataforma()
    {
        $datosPlataforma = DB::select('CALL SP_plataforma');
        return view('reportes.plataforma')->with( compact('datosPlataforma'));
    }


}
