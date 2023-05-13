@extends('adminlte::page')

@section('title', 'Senializacion')

@section('content_header')
@stop

@section('content')
<div class="container tramo-content">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/senal-de-trafico.png" alt="extintor">
                Señalización
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('registro_senializacion')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-plus-circle"></i> Agregar Nuevo</a>
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
                        <th class="align-middle">Ubigeo</th>
                        <th class="align-middle">Ruta</th>
                        <th class="align-middle">Señal</th>
                        <th class="align-middle">Imagen</th>
                        <th class="align-middle">Clasificacion</th>
                        <th class="align-middle">Progresiva</th>
                        <th class="align-middle">Lado</th>
                        <th class="align-middle">Soporte</th>
                        <th class="align-middle">Material</th>
                        <th class="align-middle">Zona</th>
                        <th class="align-middle">Coor. X</th>
                        <th class="align-middle">Coor. Y</th>
                        <th class="align-middle">Altitud</th>
                        <th class="align-middle">Fecha</th>
                        <th class="align-middle" style="background-color:#2e2170">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($senializaciones as  $senializacion)
                        <tr>
                            <td>{{ $senializacion->ruta->distrito->provincia->departamento->nombre }} </td>
                            <td>{{ $senializacion->ruta->distrito->provincia->nombre }} </td>
                            <td>{{ $senializacion->ruta->distrito->nombre }} </td>
                            <td>{{ $senializacion->ruta->distrito->ubigeo }} </td>
                            <td>{{ $senializacion->ruta->codigo }} </td>
                            <td>{{ $senializacion->senial }} </td>
                            <td>
                                <figure class="imagen-container">
                                    <img src="{{ $senializacion->codigo_imagen }}" width="30" height="30" alt="codigo">
                                </figure>
                            </td>
                            <td>{{ $senializacion->clasificacion }} </td>
                            <td>{{ $senializacion->progresiva }} </td>
                            <td>{{ $senializacion->lado }} </td>
                            <td>{{ $senializacion->soporte }} </td>
                            <td>{{ $senializacion->material }} </td>
                            <td>{{ $senializacion->zona }} </td>
                            <td>{{ $senializacion->coordenada_x }} </td>
                            <td>{{ $senializacion->coordenada_y }} </td>
                            <td>{{ $senializacion->altitud }} </td>
                            <td>{{ $senializacion->created_at }} </td>
                            <td>
                                <a
                                    href="{{route('editar_senializacion', $senializacion->id) }}"
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
</div>
@stop

@section('css')

    <link rel="stylesheet" href="/css/general/index.css">
@stop

@section('js')
    <script src="/js/general/dataTable.js"></script>
    <script src="/js/general/modalImagen.js"></script>
@stop
