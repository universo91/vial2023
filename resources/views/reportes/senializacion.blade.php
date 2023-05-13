@extends('adminlte::page')

@section('title', 'Georeferenciamiento')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/senal-de-trafico.png" alt="extintor">
                Senializacion
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('expSenializacion')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-file-excel"></i> Exp. excel</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped mt-4 nowrap" style="font-size: 15px;" >
                <thead class ="bg-info" style="font-size:14px;color:rgb(255, 255, 255);">
                    <tr>
                        <th class="align-middle">Departamento</th>
                        <th class="align-middle">Provincia</th>
                        <th class="align-middle">Ubigeo</th>
                        <th class="align-middle">Ruta</th>
                        <th class="align-middle">Señal</th>
                        <th class="align-middle">Clasificacion</th>
                        <th class="align-middle">Progresiva</th>
                        <th class="align-middle">Imagen</th>
                        <th class="align-middle">Lado</th>
                        <th class="align-middle">Soporte</th>
                        <th class="align-middle">Material</th>
                        <th class="align-middle">Zona</th>
                        <th class="align-middle">Coor. X</th>
                        <th class="align-middle">Coor. Y</th>
                        <th class="align-middle">Altitud</th>
                        <th class="align-middle">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datosSenializacion as  $senializacion)
                        <tr>
                            <td>{{ $senializacion->departamento }} </td>
                            <td>{{ $senializacion->provincia }} </td>
                            <td>{{ $senializacion->ubigeo }} </td>
                            <td>{{ $senializacion->codigo }} </td>
                            <td>{{ $senializacion->senial }} </td>
                            <td>{{ $senializacion->clasificacion }} </td>
                            <td>{{ $senializacion->progresiva }} </td>
                             <td>
                                <figure class="imagen-container">
                                    <img src="{{ $senializacion->codigo_imagen }}" width="30" height="30" alt="codigo">
                                </figure>
                            </td>
                            <td>{{ $senializacion->lado }} </td>
                            <td>{{ $senializacion->soporte }} </td>
                            <td>{{ $senializacion->material }} </td>
                            <td>{{ $senializacion->zona }} </td>
                            <td>{{ $senializacion->coordenada_x }} </td>
                            <td>{{ $senializacion->coordenada_y }} </td>
                            <td>{{ $senializacion->altitud }} </td>
                            <td>{{ $senializacion->fecha }} </td>
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
    <script src="/js/general/datatableReportes.js"></script>
    <script src="/js/general/modalImagen.js"></script>
@stop
