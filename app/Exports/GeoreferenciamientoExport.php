<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GeoreferenciamientoExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $datosReferenciamiento = DB::select('CALL SP_FormatoReferenciamiento');
        $collectReferenciamiento = collect( $datosReferenciamiento );
        return view('formatos.georeferenciamiento', compact('collectReferenciamiento'));
    }
}
