@extends('adminlte::page')

@section('title', 'Georeferenciamiento')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/satelite.png" alt="satelite">
                Georeferenciamiento de carreteras
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('expGeoref')}}" type="button" class="btn btn-success btn-flat">Exp. excel</a>
            <a type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body overflow-auto">
            <table id="example" class="table table-striped table-bordered shadow-lg mt-4 mr-2" style="font-size: 14px;" >
                <thead class="bg-primary" style="font-size: 16px;">
                    <tr>
                        <th class="align-middle">Ubigeo</th>
                        <th class="align-middle">Codigo Ruta</th>
                        <th class="align-middle">Punto inicial</th>
                        <th class="align-middle">Progesiva<sub>i</sub></th>
                        <th class="align-middle">Zona<sub>i</sub></th>
                        <th class="align-middle">X<sub>i</sub></th>
                        <th class="align-middle">Y<sub>i</sub></th>
                        <th class="align-middle">Altitud<sub>i</sub></th>
                        <th class="align-middle">Punto Final</th>
                        <th class="align-middle">Progesiva<sub>f</sub></th>
                        <th class="align-middle">Zona<sub>f</sub></th>
                        <th class="align-middle">X<sub>f</sub></th>
                        <th class="align-middle">Y<sub>f</sub></th>
                        <th class="align-middle">Altitud<sub>f</sub></th>
                        <th class="align-middle">Fecha</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($datosReferenciamiento as  $referenciamiento)
                        <tr>
                            <td>{{ $referenciamiento->ubigeo }} </td>
                            <td>{{ $referenciamiento->codigo }} </td>
                            <td>{{ $referenciamiento->punto_inicio }} </td>
                            <td>{{ $referenciamiento->progresiva_punto_inicial }} </td>
                            <td>{{ $referenciamiento->zona }} </td>
                            <td>{{ $referenciamiento->coordenada_x_inicio }} </td>
                            <td>{{ $referenciamiento->coordenada_y_inicio }} </td>
                            <td>{{ $referenciamiento->altitud_punto_inicial }} </td>
                            <td>{{ $referenciamiento->punto_final }} </td>
                            <td>{{ $referenciamiento->progresiva_punto_final }} </td>
                            <td>{{ $referenciamiento->zona_final }} </td>
                            <td>{{ $referenciamiento->coordenada_x_final }} </td>
                            <td>{{ $referenciamiento->coordenada_y_final }} </td>
                            <td>{{ $referenciamiento->altitud_punto_final }} </td>
                            <td>{{ $referenciamiento->fecha }} </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>


</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/general/dataTable.js"></script>
@stop
