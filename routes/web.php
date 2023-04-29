<?php

use App\Http\Controllers\distrito\DistritoController;
use App\Http\Controllers\provincia\ProvinciaController;
use App\Http\Controllers\puente\PuenteController;
use App\Http\Controllers\reportes\ReportesController;
use App\Http\Controllers\reportes\ReportesExcelController;
use App\Http\Controllers\ruta\RutaController;
use App\Http\Controllers\senial\SenializacionController;
use App\Http\Controllers\superficie\SuperficieController;
use App\Http\Controllers\tipo\TipoController;
use App\Http\Controllers\tramo\TramoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/previa', function() {
    return view('login1');
});

Route::get('/reporte/georeferenciamiento', [ReportesController::class, 'getDatosReferenciamiento']);
Route::get('/reporte/itinerario', [ReportesController::class, 'getItinerarioRutas']);
Route::get('/reporte/plataforma', [ReportesController::class, 'getPlataforma']);

Route::get('/reporte/superficie-rodadura', [ReportesController::class, 'getSuperficieRodadura']);
Route::get('/reporte/tipo-superficie', [ReportesController::class, 'getTipoSuperficie']);
Route::get('/reporte/estado-transitabilidad', [ReportesController::class, 'getEstadoTransitabilidad']);
Route::get('/reporte/senializacion', [ReportesController::class, 'getSenializacion']);
Route::get('/reporte/puente', [ReportesController::class, 'getPuentes']);

Route::get('/ruta/registro', [RutaController::class, 'registrar']);
Route::get('/tramo/registro', [TramoController::class, 'registrar']);
Route::get('/puente/registro', [PuenteController::class, 'registrar']);
Route::get('/senializacion/registro', [SenializacionController::class, 'registrar']);
Route::get('/superficie/registro', [SuperficieController::class, 'registrar']);

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

Route::get('rutas/export/excel', [ReportesExcelController::class, 'exportRutas'])->name('exportarRuta');
Route::get('georeferenciamiento/export/excel', [ReportesExcelController::class, 'exportarGeoreferenciamiento'])->name('expGeoref');
Route::get('itinerario/export/excel', [ ReportesExcelController::class, 'exportarItinerario'] )->name('expItinerario');
Route::get('sup-rodadura/export/excel', [ ReportesExcelController::class, 'exportarSuperficieRodadura'] )->name('expSupRodadura');
Route::get('sup-rodadura/export/excel', [ ReportesExcelController::class, 'exportarTipoSuperficie'] )->name('expTipoSuperficie');
