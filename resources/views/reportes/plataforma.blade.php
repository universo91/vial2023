@extends('adminlte::page')

@section('title', 'Georeferenciamiento')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/carreras.png" alt="plataforma">
                Plataformas
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('expPlataforma')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-file-excel"></i> Exp. excel</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped mt-4 nowrap" style="font-size: 15px;" >
                <thead class ="bg-info" style="font-size:14px;color:rgb(255, 255, 255);">
                    <tr>
                        <th class="align-middle">Codigo</th>
                        <th class="align-middle">Tramo</th>
                        <th class="align-middle">X<sub>i</sub></th>
                        <th class="align-middle">Y<sub>i</sub></th>
                        <th class="align-middle">Altitud<sub>i</sub></th>
                        <th class="align-middle">X<sub>f</sub></th>
                        <th class="align-middle">Y<sub>f</sub></th>
                        <th class="align-middle">Altitud<sub>f</sub></th>
                        <th class="align-middle">N° Carriles</th>
                        <th class="align-middle">A. Calzada</th>
                        <th class="align-middle">A. berma Izq.</th>
                        <th class="align-middle">A. berma Der.</th>
                        <th class="align-middle">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datosPlataforma as  $plataforma)
                        <tr>
                            <td>{{ $plataforma->codigo }} </td>
                            <td>{{ $plataforma->numero_tramo }} </td>
                            <td>{{ $plataforma->coor_x_inicial }} </td>
                            <td>{{ $plataforma->coor_y_inicial }} </td>
                            <td>{{ $plataforma->altitud_inicial }} </td>
                            <td>{{ $plataforma->coor_x_final }} </td>
                            <td>{{ $plataforma->coor_y_final }} </td>
                            <td>{{ $plataforma->altitud_final }} </td>
                            <td>{{ $plataforma->numero_carriles }} </td>
                            <td>{{ $plataforma->ancho_calzada }} </td>
                            <td>{{ $plataforma->ancho_berma_izquierda }} </td>
                            <td>{{ $plataforma->ancho_berma_derecha }} </td>
                            <td>{{ $plataforma->fecha }} </td>
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
