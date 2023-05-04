@extends('adminlte::page')

@section('title', 'Sup. rodadura')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/deslizamiento.png" alt="tipo superficie">
                Tipo de Superficie
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('expTipoSuperficie')}}" type="button" class="btn btn-success btn-flat">Exp. excel</a>
            <a type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered shadow-lg mt-4 small mr-2" style="font-size: 12px;" >
        <thead class="bg-info" style="font-size: 10px;">
            <tr>
                <th class="align-middle">Departamento</th>
                <th class="align-middle">Provincia</th>
                <th class="align-middle">Ubigeo</th>
                <th class="align-middle">Ruta</th>
                <th class="align-middle">Trayectoria</th>
                <th class="align-middle">Estado via</th>
                <th class="align-middle">T. superficie</th>
                <th class="align-middle">A. plataforma</th>
                <th class="align-middle">Prog.<sub>i</sub></th>
                <th class="align-middle">X<sub>i</sub></th>
                <th class="align-middle">Y<sub>i</sub></th>
                <th class="align-middle">Altitud<sub>i</sub></th>
                <th class="align-middle">Prog.<sub>f</sub></th>
                <th class="align-middle">X<sub>f</sub></th>
                <th class="align-middle">Y<sub>f</sub></th>
                <th class="align-middle">Altitud<sub>f</sub></th>
                <th class="align-middle">Zona</th>
                <th class="align-middle">Fecha creacion</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tiposSuperficie as  $tipoSuperficie)
                <tr>
                    <td>{{ $tipoSuperficie->departamento }} </td>
                    <td>{{ $tipoSuperficie->provincia }} </td>
                    <td>{{ $tipoSuperficie->ubigeo }} </td>
                    <td>{{ $tipoSuperficie->codigo }} </td>
                    <td>{{ $tipoSuperficie->TRAYECTORIA }} </td>
                    <td>{{ $tipoSuperficie->estado_via }} </td>
                    <td>{{ $tipoSuperficie->tipo_superficie }} </td>
                    <td>{{ $tipoSuperficie->ANCHO_PLATAFORMA }} </td>
                    <td>{{ $tipoSuperficie->progresiva_inicial }} </td>
                    <td>{{ $tipoSuperficie->coor_x_inicial }} </td>
                    <td>{{ $tipoSuperficie->coor_y_inicial }} </td>
                    <td>{{ $tipoSuperficie->altitud_inicial }} </td>
                    <td>{{ $tipoSuperficie->progresiva_final }} </td>
                    <td>{{ $tipoSuperficie->coor_x_final }} </td>
                    <td>{{ $tipoSuperficie->coor_y_final }} </td>
                    <td>{{ $tipoSuperficie->altitud_final }} </td>
                    <td>{{ $tipoSuperficie->zona }} </td>
                    <td>{{ $tipoSuperficie->fecha }} </td>

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
