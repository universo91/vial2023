<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class GeoreferenciamientoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $itinerarioRutas = DB::select('CALL SP_ItinerarioRutas');
        $collectRutas = collect( $itinerarioRutas );
        return $collectRutas;
    }
}
