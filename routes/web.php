<?php

use App\Http\Controllers\distrito\DistritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\provincia\ProvinciaController;
use App\Http\Controllers\puente\PuenteController;
use App\Http\Controllers\reportes\ReportesController;
use App\Http\Controllers\reportes\ReportesExcelController;
use App\Http\Controllers\ruta\RutaController;
use App\Http\Controllers\senial\SenializacionController;
use App\Http\Controllers\superficie\SuperficieController;
use App\Http\Controllers\tipo\TipoController;
use App\Http\Controllers\tramo\TramoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::post('/imagen/guardar', [TramoController::class, 'guardarImagen'])->name('guardar-imagen');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/reporte/georeferenciamiento', [ReportesController::class, 'getDatosReferenciamiento']);
    Route::get('/reporte/itinerario', [ReportesController::class, 'getItinerarioRutas']);
    Route::get('/reporte/plataforma', [ReportesController::class, 'getPlataforma']);

    //Listas
    Route::get('/tramo/vista_tramos', [TramoController::class, 'listaTramos'])->name('lista_tramos');
    Route::get('/superficie/vista_superficies', [SuperficieController::class, 'listaSuperficies'])->name('lista_superficies');
    Route::get('/senializaciom/vista_senializaciones', [SenializacionController::class, 'listaSenializaciones'])->name('lista_senializaciones');
    Route::get('/puente/vista_puentes', [PuenteController::class, 'listaPuentes'])->name('lista_puentes');
    Route::get('/ruta/vista_rutas', [RutaController::class, 'listaRutas'])->name('lista_rutas');


    Route::get('/tramo/{id}/editar', [TramoController::class, 'editarTramo'])->name('editar_tramo');
    Route::get('/superficie/{id}/editar', [SuperficieController::class, 'editarSuperficie'])->name('editar_superficie');
    Route::get('/senializacion/{id}/editar', [SenializacionController::class, 'editarSenializacion'])->name('editar_senializacion');
    Route::get('/puente/{id}/editar', [PuenteController::class, 'editarPuente'])->name('editar_puente');
    Route::get('/ruta/{id}/editar', [RutaController::class, 'editarRuta'])->name('editar_ruta');

    Route::put('/puente/{id}/actualizar', [PuenteController::class, 'actualizarPuente'])->name('actualizar_puente');
    Route::put('/ruta/{id}/actualizar', [RutaController::class, 'actualizarRuta'])->name('actualizar_ruta');
    Route::put('/senializacion/{id}/actualizar', [SenializacionController::class, 'actualizarSenializacion'])->name('actualizar_senializacion');
    Route::put('/superficie/{id}/actualizar', [SuperficieController::class, 'actualizarSuperficie'])->name('actualizar_superficie');
    Route::put('/tramo/{id}/actualizar', [TramoController::class, 'actualizarTramo'])->name('actualizar_tramo');

    Route::get('/ruta/registro', [RutaController::class, 'registrar'])->name('registro_ruta');
    Route::get('/tramo/registro', [TramoController::class, 'registrar'])->name('registro_tramo');
    Route::get('/puente/registro', [PuenteController::class, 'registrar'])->name('registro_puente');
    Route::get('/senializacion/registro', [SenializacionController::class, 'registrar'])->name('registro_senializacion');
    Route::get('/superficie/registro', [SuperficieController::class, 'registrar'])->name('registro_superficie');

    Route::get('/departamento/{id}/provincias', [ProvinciaController::class, 'getProvincias']);
    Route::get('/provincia/{id}/distritos', [DistritoController::class, 'getDistritos']);
    Route::get('/distrito/{id}/rutas', [RutaController::class, 'getRutas']);
    Route::get('/ruta/{id}/tramos', [TramoController::class, 'getTramos']);
    Route::get('/clase/{id}/tipos', [TipoController::class, 'getTipos']);
    Route::post('/ruta/crear', [RutaController::class, 'crear'])->name('registrarRuta');
    Route::post('/tramo/crear', [TramoController::class, 'crear'])->name('registrarTramo');
    Route::post('/puente/crear', [PuenteController::class, 'crear'])->name('registrarPuente');
    Route::post('/superficie/crear', [SuperficieController::class, 'crear'])->name('registrarSuperficie');
    Route::post('/senializacion/crear', [SenializacionController::class, 'crear'])->name('registrarSenializacion');

    //Reportes vista
    Route::get('/reporte/superficie-rodadura', [ReportesController::class, 'getSuperficieRodadura']);
    Route::get('/reporte/tipo-superficie', [ReportesController::class, 'getTipoSuperficie']);
    Route::get('/reporte/estado-transitabilidad', [ReportesController::class, 'getEstadoTransitabilidad']);
    Route::get('/reporte/senializacion', [ReportesController::class, 'getSenializacion']);
    Route::get('/reporte/puente', [ReportesController::class, 'getPuentes']);

    //Reportes excel
    Route::get('georeferenciamiento/export/excel', [ReportesExcelController::class, 'exportarGeoreferenciamiento'])->name('expGeoref');
    Route::get('itinerario/export/excel', [ ReportesExcelController::class, 'exportarItinerario'] )->name('expItinerario');
    Route::get('sup-rodadura/export/excel', [ ReportesExcelController::class, 'exportarSuperficieRodadura'] )->name('expSupRodadura');
    Route::get('tipo-superficie/export/excel', [ ReportesExcelController::class, 'exportarTipoSuperficie'] )->name('expTipoSuperficie');
    Route::get('plataforma/export/excel', [ ReportesExcelController::class, 'exportPlataforma'] )->name('expPlataforma');
    Route::get('estado-transitabilidad/export/excel', [ ReportesExcelController::class, 'exportEstTransitabilidad'] )->name('expEstTransitabilidad');
    Route::get('senializacion/export/excel', [ ReportesExcelController::class, 'exportSenializacion'] )->name('expSenializacion');
    Route::get('puente/export/excel', [ ReportesExcelController::class, 'exportPuente'] )->name('expPuente');
});
