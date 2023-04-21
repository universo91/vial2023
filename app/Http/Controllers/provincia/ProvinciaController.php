<?php

namespace App\Http\Controllers\provincia;

use App\Http\Controllers\Controller;
use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{

    public function getProvincias( $id ) {

        $provincias = Provincia::where('departamentos_id', $id)->get(['nombre', 'id']);
        return $provincias;
    }
}
