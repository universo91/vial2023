<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class Plataforma implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        $datosPlataforma = DB::select('CALL SP_plataforma');
        $collectPlataforma = collect( $datosPlataforma);
        return view('formatos.plataforma')->with( compact('collectPlataforma'));
    }
}
