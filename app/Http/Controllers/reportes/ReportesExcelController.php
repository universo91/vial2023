<?php

namespace App\Http\Controllers\reportes;

use App\Exports\EstadoTransitabilidad;
use App\Exports\GeoreferenciamientoExport;
use App\Exports\ItinerarioExport;
use App\Exports\Plataforma;
use App\Exports\RutasExport;
use App\Exports\SuperficieRodadura;
use App\Exports\TipoSuperficie;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ReportesExcelController extends Controller
{
    public function exportRutas()
    {

        return Excel::download(new RutasExport, 'ruas.xlsx');
    }

    public function exportarGeoreferenciamiento()
    {
        return Excel::download( new GeoreferenciamientoExport, 'georefenciamiento.xlsx' );
    }

    public function exportarItinerario()
    {
        return Excel::download( new ItinerarioExport, 'itinerario.xlsx');
    }

    public function exportarSuperficieRodadura()
    {
        return Excel::download( new SuperficieRodadura, 'sup_rodadura.xlsx' );
    }

    public function exportarTipoSuperficie()
    {
        return Excel::download(new TipoSuperficie, 'tipo_superficie.xlsx');
    }

    public function exportPlataforma()
    {
        return Excel::download( new Plataforma, 'plataforma.xlsx');
    }

    public function exportEstTransitabilidad()
    {
        return Excel::download( new EstadoTransitabilidad, 'estado_transitabilidad.xlsx');
    }



}
