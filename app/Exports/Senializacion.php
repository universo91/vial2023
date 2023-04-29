<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class Senializacion implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        $datosSenializacion = DB::select('CALL SP_Senializacion');
        $collectSenializacion = collect( $datosSenializacion );
        return view('formatos.senializacion', compact('collectSenializacion'));
    }
}
