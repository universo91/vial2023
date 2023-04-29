<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class Puente implements FromView, ShouldAutoSize
{

    public function view() : View
    {
        $datosPuente = DB::select('CALL SP_Puentes');
        $collectPuente = collect($datosPuente);
        return view('formatos.puente')->with(compact('collectPuente'));
    }
}
