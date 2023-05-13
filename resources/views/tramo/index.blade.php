@extends('adminlte::page')

@section('title', 'Georeferenciamiento')

@section('content_header')
@stop

@section('content')
<div class="container tramo-content">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <img src="/img/mapa.png" alt="mapa">
            Tramos
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('registro_tramo')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-plus-circle"></i> Agregar Nuevo</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped mt-4 order-column nowrap" style="font-size:15px;" >
                <thead class="" style="font-size:14px;color:rgb(255, 255, 255);background-color:#2e2170">
                    <tr>
                        <th class="align-middle">Departamento</th>
                        <th class="align-middle">Provincia</th>
                        <th class="align-middle">Distrito</th>
                        <th class="align-middle">Ruta</th>
                        <th class="align-middle">Tramo</th>
                        <th class="align-middle">T. terreno</th>
                        <th class="align-middle">Estado via</th>
                        <th class="align-middle">T. Superficie<sub>i</sub></th>
                        <th class="align-middle">Progresiva<sub>i</sub></th>
                        <th class="align-middle">Progresiva<sub>f</sub></th>
                        <th class="align-middle">X<sub>i</sub></th>
                        <th class="align-middle">Y<sub>i</sub></th>
                        <th class="align-middle">Altitud<sub>i</sub></th>
                        <th class="align-middle">X<sub>f</sub></th>
                        <th class="align-middle">Y<sub>f</sub></th>
                        <th class="align-middle">Altitud<sub>f</sub></th>
                        <th class="align-middle">Zona<sub>f</sub></th>
                        <th class="align-middle">Pto. Notable</th>
                        <th class="align-middle">Codigo Img</th>
                        <th class="align-middle">Tramo <sub>i</sub></th>
                        <th class="align-middle">Tramo <sub>f</sub></th>
                        <th class="align-middle">N° Carriles</th>
                        <th class="align-middle">Ancho calzada</th>
                        <th class="align-middle">A. berma Izq.</th>
                        <th class="align-middle">A. berma Der.</th>
                        <th class="align-middle">Ident. Calzada</th>
                        <th class="align-middle">Ident. CalzadaObservaciones</th>
                        <th class="align-middle">Fecha</th>
                        <th class="align-middle" style="background-color:#2e2170">
                            Acciones
                        </th>



                    </tr>
                </thead>
                <tbody>
                    @foreach ($tramos as  $tramo)
                        <tr>
                            <td>{{ $tramo->ruta->distrito->provincia->departamento->nombre }} </td>
                            <td>{{ $tramo->ruta->distrito->provincia->nombre }} </td>
                            <td>{{ $tramo->ruta->distrito->nombre }} </td>
                            <td>{{ $tramo->ruta->codigo }} </td>
                            <td>{{ $tramo->numero_tramo }} </td>
                            <td>{{ $tramo->tipo_terreno }} </td>
                            <td>{{ $tramo->estado_via }} </td>
                            <td>{{ $tramo->tipo_superficie }} </td>
                            <td>{{ $tramo->progresiva_inicial }} </td>
                            <td>{{ $tramo->progresiva_final }} </td>
                            <td>{{ $tramo->coor_x_inicial }} </td>
                            <td>{{ $tramo->coor_y_inicial }} </td>
                            <td>{{ $tramo->altitud_inicial }} </td>
                            <td>{{ $tramo->coor_x_final }} </td>
                            <td>{{ $tramo->coor_y_final }} </td>
                            <td>{{ $tramo->altitud_final }} </td>
                            <td>{{ $tramo->zona }} </td>
                            <td>{{ $tramo->punto_notable }} </td>
                            <td>
                                <figure class="imagen-container">
                                    <img src="{{ $tramo->codigo_imagen }}" width="30" height="30" alt="codigo">
                                </figure>
                            </td>
                            <td>{{ $tramo->tramo_inicio }} </td>
                            <td>{{ $tramo->tramo_fin }} </td>
                            <td>{{ $tramo->numero_carriles }} </td>
                            <td>{{ $tramo->ancho_calzada }} </td>
                            <td>{{ $tramo->ancho_berma_izquierda }} </td>
                            <td>{{ $tramo->ancho_berma_derecha }} </td>
                            <td>{{ $tramo->identificacion_calzada }} </td>
                            <td>{{ $tramo->observaciones }} </td>
                            <td>{{ $tramo->created_at }} </td>
                            <td class='accion'>
                                <a
                                    href="{{ route('editar_tramo', $tramo->id) }}"
                                    class="btn btn-xs"
                                    style="background-color: #D80E42;color:white"
                                >
                                    Editar
                                </a>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <figure class="modal-imagen">
        <span><i class="fas fa-times-circle"></i></span>
        <img src="" alt="imagen">
    </figure>


</div>
<figure class="popup-imagen">

</figure>

@stop

@section('css')
    <link rel="stylesheet" href="/css/general/index.css">

@stop

@section('js')
    <script src="/js/general/dataTable.js"></script>
    <script src="/js/general/modalImagen.js"></script>
@stop
