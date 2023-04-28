<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;

class ItinerarioExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $itinerarioRutas = DB::select('CALL SP_ItinerarioRutas');
        $collectItinerario = collect( $itinerarioRutas );
        return view('formatos.itinerario', compact('collectItinerario'));
    }
}
