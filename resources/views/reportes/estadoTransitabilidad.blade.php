@extends('adminlte::page')

@section('title', 'Georeferenciamiento')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/carro.png" alt="carro">
                Estado de transitabilidad
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('expEstTransitabilidad')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-file-excel"></i> Exp. excel</a>
            <a hidden type="button" class="btn btn-danger btn-flat"><i class="fas fa-file-excel"></i> Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped shadow-lg mt-4 nowrap " style="font-size: 15px;" >
                <thead style="font-size:14px;color:rgb(255, 255, 255);background-color:#2e2170">
                    <tr>
                        <th class="align-middle">Codigo</th>
                        <th class="align-middle">Tramo</th>
                        <th class="align-middle">Progresiva<sub>i</sub></th>
                        <th class="align-middle">Progresiva<sub>f</sub></th>
                        <th class="align-middle">X<sub>i</sub></th>
                        <th class="align-middle">Y<sub>i</sub></th>
                        <th class="align-middle">Altitud<sub>i</sub></th>
                        <th class="align-middle">X<sub>f</sub></th>
                        <th class="align-middle">Y<sub>f</sub></th>
                        <th class="align-middle">Altitud<sub>f</sub></th>
                        <th class="align-middle">Estado via</th>
                        <th class="align-middle">Ident. Calzada</th>
                        <th class="align-middle">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estadosTransitabilidad as  $estadoTransitabilidad)
                        <tr>
                            <td>{{ $estadoTransitabilidad->codigo }} </td>
                            <td>{{ $estadoTransitabilidad->numero_tramo }} </td>
                            <td>{{ $estadoTransitabilidad->progresiva_inicial }} </td>
                            <td>{{ $estadoTransitabilidad->progresiva_final }} </td>
                            <td>{{ $estadoTransitabilidad->coor_x_inicial }} </td>
                            <td>{{ $estadoTransitabilidad->coor_y_inicial }} </td>
                            <td>{{ $estadoTransitabilidad->altitud_inicial }} </td>
                            <td>{{ $estadoTransitabilidad->coor_x_final }} </td>
                            <td>{{ $estadoTransitabilidad->coor_y_final }} </td>
                            <td>{{ $estadoTransitabilidad->altitud_final }} </td>
                            <td>{{ $estadoTransitabilidad->estado_via }} </td>
                            <td>{{ $estadoTransitabilidad->identificacion_calzada }} </td>
                            <td>{{ $estadoTransitabilidad->fecha }} </td>
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
    <script src="/js/general/datatableReportes.js"></script>
@stop
