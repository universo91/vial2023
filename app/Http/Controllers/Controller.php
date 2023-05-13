<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $disk = 'public';

    public function guardarImagen(Request $request)
    {
        //Obtenemos la imagen
        $imagen = $request->file('codigo_imagen');

        //Obtenemos el nombre de la imagen, y si este tuvira espacios, lo reemplazamo con guiones, por medio
        // del metodo slug
        if( ! $imagen->getClientOriginalName()  ) {
            return ;
        }
        $nombreImagen = Str::slug( $request->file('codigo_imagen')->getClientOriginalName() );

        //Renombramos la imagen
        $nuevoNombreImagen = Str::random(16) . '_' . $nombreImagen;

        //Le indicamos que guarde en storage, dentro del disk public, en una carpeta imagenes.
        $ruta = $imagen->storeAs('/imagenes', $nuevoNombreImagen.".".$imagen->extension(), $this->disk);

        //
        $urlImagen = Storage::url($ruta);
        return $urlImagen;
    }


}
