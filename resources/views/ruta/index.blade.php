@extends('adminlte::page')

@section('title', 'Ruta')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/ruta.png" alt="rutas">
                Rutas
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('registro_ruta')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-plus-circle"></i> Agregar Nuevo</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped mt-4 nowrap" style="font-size: 15px;" >
                <thead class="" style="font-size:14px;color:rgb(255, 255, 255);background-color:#2e2170">
                    <tr>
                        <th class="align-middle">Departamento</th>
                        <th class="align-middle">Provincia</th>
                        <th class="align-middle">Distrito</th>
                        <th class="align-middle">Ruta</th>
                        <th class="align-middle">Imagen</th>
                        <th class="align-middle">Punto inicial</th>
                        <th class="align-middle">Coor. X<sub>i</sub></th>
                        <th class="align-middle">Coor. Y<sub>i</sub></th>
                        <th class="align-middle">Punto Final</th>
                        <th class="align-middle">Coor. X<sub>f</sub></th>
                        <th class="align-middle">Coor. Y<sub>f</sub></th>
                        <th class="align-middle">Altitud<sub>I</sub></th>
                        <th class="align-middle">Altitud<sub>F</th>
                        <th class="align-middle">Progresiva<sub>I</sub></th>
                        <th class="align-middle">Progresiva<sub>F</sub></th>
                        <th class="align-middle">Fecha</th>
                        <th class="align-middle" style="background-color:#2e2170">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rutas as  $ruta)
                        <tr>
                            <td>{{ $ruta->distrito->provincia->departamento->nombre }} </td>
                            <td>{{ $ruta->distrito->provincia->nombre }} </td>
                            <td>{{ $ruta->distrito->nombre }} </td>
                            <td>{{ $ruta->codigo }} </td>
                            <td>
                                <figure class="imagen-container">
                                    <img src="{{ $ruta->codigo_imagen }}" width="30" height="30" alt="codigo">
                                </figure>
                            </td>
                            <td>{{ $ruta->punto_inicio }} </td>
                            <td>{{ $ruta->coordenada_x_inicio }} </td>
                            <td>{{ $ruta->coordenada_y_inicio }} </td>
                            <td>{{ $ruta->punto_final }} </td>
                            <td>{{ $ruta->coordenada_x_final }} </td>
                            <td>{{ $ruta->coordenada_y_final }} </td>
                            <td>{{ $ruta->altitud_punto_inicial }} </td>
                            <td>{{ $ruta->altitud_punto_final }} </td>
                            <td>{{ $ruta->progresiva_punto_inicial }} </td>
                            <td>{{ $ruta->progresiva_punto_final }} </td>
                            <td>{{ $ruta->created_at }} </td>
                            <td>
                                <a
                                    href="{{route('editar_ruta', $ruta->id) }}"
                                    class="btn btn-xs"
                                    style="background-color: #D80E42;color:white"
                                >
                                    <i class="fas fa-edit"></i>
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
