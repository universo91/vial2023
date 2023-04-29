<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SuperficieRodadura implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        $supRodaduras = DB::select('CALL SP_SuperficieRodadura');
        $collectRodaduras = collect( $supRodaduras );
        return view('formatos.superficieRodadura', compact('collectRodaduras') );
    }
}
