@extends('adminlte::page')

@section('title', 'Georeferenciamiento')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="" alt="">
                Itinerario de rutas
            </a>
        </h3>
        <hr>
    </div>
    <table id="example" class="table table-striped table-bordered shadow-lg mt-4 small mr-2" style="font-size: 12px;" >
        <thead class="bg-info" style="font-size: 10px;">
            <tr>
                <th class="align-middle">Ubigeo</th>
                <th class="align-middle">Codigo Ruta</th>
                <th class="align-middle">Tramo</th>
                <th class="align-middle">T. terreno</th>
                <th class="align-middle">Estado via</th>
                <th class="align-middle">T. Superficie<sub>i</sub></th>
                <th class="align-middle">Ancho Plat.</th>
                <th class="align-middle">Progresiva<sub>i</sub></th>
                <th class="align-middle">X<sub>i</sub></th>
                <th class="align-middle">Y<sub>i</sub></th>
                <th class="align-middle">Altitud<sub>i</sub></th>
                <th class="align-middle">X<sub>f</sub></th>
                <th class="align-middle">Y<sub>f</sub></th>
                <th class="align-middle">Altitud<sub>f</sub></th>
                <th class="align-middle">Zona<sub>f</sub></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($itinerarioRutas as  $itinerario)
                <tr>
                    <td>{{ $itinerario->ubigeo }} </td>
                    <td>{{ $itinerario->codigo }} </td>
                    <td>{{ $itinerario->numero_tramo }} </td>
                    <td>{{ $itinerario->tipo_terreno }} </td>
                    <td>{{ $itinerario->estado_via }} </td>
                    <td>{{ $itinerario->tipo_superficie }} </td>
                    <td>{{ $itinerario->acho_plataforma }} </td>
                    <td>{{ $itinerario->progresiva }} </td>
                    <td>{{ $itinerario->coor_x_inicial }} </td>
                    <td>{{ $itinerario->coor_y_inicial }} </td>
                    <td>{{ $itinerario->altitud_inicial }} </td>
                    <td>{{ $itinerario->coor_x_final }} </td>
                    <td>{{ $itinerario->coor_y_final }} </td>
                    <td>{{ $itinerario->altitud_final }} </td>
                    <td>{{ $itinerario->zona }} </td>

                </tr>
            @endforeach


        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/general/dataTable.js"></script>
@stop
