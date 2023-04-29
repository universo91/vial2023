<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TipoSuperficie implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        $tiposSuperficie = DB::select('CALL SP_TipoSuperficie');
        $collectSuperficie = collect( $tiposSuperficie);
        return view('formatos.tipoSuperficie', compact($collectSuperficie) );
    }
}
