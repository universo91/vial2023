<?php

namespace App\Http\Controllers\reportes;

use App\Exports\GeoreferenciamientoExport;
use App\Exports\ItinerarioExport;
use App\Exports\RutasExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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


}
