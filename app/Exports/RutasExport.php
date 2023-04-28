<?php

namespace App\Exports;

use App\Models\Ruta;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class RutasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $itinerarioRutas = DB::select('CALL SP_ItinerarioRutas');
        $collectItinerario = collect( $itinerarioRutas);
        return $collectItinerario;
    }
}
