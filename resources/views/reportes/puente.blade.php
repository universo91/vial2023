@extends('adminlte::page')

@section('title', 'Georeferenciamiento')

@section('content_header')
@stop

@section('content')
<div class="container tramo-content">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/puente.png" alt="puente">
                Puente
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('expPuente')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-file-excel"></i> Exp. excel</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped  mt-4 nowrap" style="font-size: 15px;" >
                <thead class ="bg-info" style="font-size:14px;color:rgb(255, 255, 255);">
                    <tr>
                        <th class="align-middle">Ruta</th>
                        <th class="align-middle">Progresiva</th>
                        <th class="align-middle">Imagen</th>
                        <th class="align-middle">Coord.X</th>
                        <th class="align-middle">Coord.Y</th>
                        <th class="align-middle">Altitud</th>
                        <th class="align-middle">Clase</th>
                        <th class="align-middle">Tipo</th>
                        <th class="align-middle">Num. Vias</th>
                        <th class="align-middle">Tabl. rodadura</th>
                        <th class="align-middle">Longitud</th>
                        <th class="align-middle">Ancho calzada.</th>
                        <th class="align-middle">Cond. funcional</th>
                        <th class="align-middle">Hidrografia</th>
                        <th class="align-middle">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datosPuente as  $puente)
                        <tr>
                            <td>{{ $puente->codigo }} </td>
                            <td>{{ $puente->progresiva }} </td>
                            <td>
                                <figure class="imagen-container">
                                    <img src="{{ $puente->codigo_imagen }}" width="30" height="30" alt="codigo">
                                </figure>
                            </td>
                            <td>{{ $puente->coordenada_x }} </td>
                            <td>{{ $puente->coordenada_y }} </td>
                            <td>{{ $puente->altitud }} </td>
                            <td>{{ $puente->clase }} </td>
                            <td>{{ $puente->tipo }} </td>
                            <td>{{ $puente->numero_vias }} </td>
                            <td>{{ $puente->tablero_rodadura }} </td>
                            <td>{{ $puente->longitud }} </td>
                            <td>{{ $puente->ancho_calzada }} </td>
                            <td>{{ $puente->condicion_funcional }} </td>
                            <td>{{ $puente->hidrografia }} </td>
                            <td>{{ $puente->fecha }} </td>
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
