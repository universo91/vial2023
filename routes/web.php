<?php

use App\Http\Controllers\distrito\DistritoController;
use App\Http\Controllers\provincia\ProvinciaController;
use App\Http\Controllers\puente\PuenteController;
use App\Http\Controllers\ruta\RutaController;
use App\Http\Controllers\senial\SenializacionController;
use App\Http\Controllers\superficie\SuperficieController;
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

Route::get('/ruta/registro', [RutaController::class, 'registrar']);
Route::get('/tramo/registro', [TramoController::class, 'registrar']);
Route::get('/puente/registro', [PuenteController::class, 'registrar']);
Route::get('/senializacion/registro', [SenializacionController::class, 'registrar']);
Route::get('/superficie/registro', [SuperficieController::class, 'registrar']);

Route::get('/departamento/{id}/provincias', [ProvinciaController::class, 'getProvincias']);
Route::get('/provincia/{id}/distritos', [DistritoController::class, 'getDistritos']);
Route::get('/distrito/{id}/rutas', [RutaController::class, 'getRutas']);
Route::post('/ruta/crear', [RutaController::class, 'crear'])->name('registrarRuta');
Route::post('/tramo/crear', [TramoController::class, 'crear'])->name('registrarTramo');
Route::post('/puente/crear', [PuenteController::class, 'crear'])->name('registrarPuente');
Route::post('/superficie/crear', [SuperficieController::class, 'crear'])->name('registrarSuperficie');
