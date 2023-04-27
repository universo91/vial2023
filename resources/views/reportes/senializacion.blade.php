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
                Senializacion
            </a>
        </h3>
        <hr>
    </div>
    <table id="example" class="table table-striped table-bordered shadow-lg mt-4 small mr-2" style="font-size: 12px;" >
        <thead class="bg-info" style="font-size: 10px;">
            <tr>
                <th class="align-middle">Departamento</th>
                <th class="align-middle">Provincia</th>
                <th class="align-middle">Ubigeo</th>
                <th class="align-middle">Codigo</th>
                <th class="align-middle">Señal</th>
                <th class="align-middle">Clasificacion</th>
                <th class="align-middle">Progresiva</th>
                <th class="align-middle">Lado</th>
                <th class="align-middle">Soperto</th>
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
                    <td>{{ $senializacion->nombre }} </td>
                    <td>{{ $senializacion->nombre }} </td>
                    <td>{{ $senializacion->ubigeo }} </td>
                    <td>{{ $senializacion->codigo }} </td>
                    <td>{{ $senializacion->senial }} </td>
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