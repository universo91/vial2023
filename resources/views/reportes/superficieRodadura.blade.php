@extends('adminlte::page')

@section('title', 'Sup. rodadura')

@section('content_header')
@stop

@section('content')
<div class="container tramo-content">
    <div class="container ">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="/img/coche.png" alt="">
                Superficie de rodadura
            </a>
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('expSupRodadura')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-file-excel"></i> Exp. excel</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped mt-4 nowrap" style="font-size: 15px;" >
                <thead class ="bg-info" style="font-size:14px;color:rgb(255, 255, 255);">
                    <tr>
                        <th class="align-middle">Codigo Ruta</th>
                        <th class="align-middle">Tramo</th>
                        <th class="align-middle">Progresiva<sub>i</sub></th>
                        <th class="align-middle">Progresiva<sub>f</sub></th>
                        <th class="align-middle">X<sub>i</sub></th>
                        <th class="align-middle">Y<sub>i</sub></th>
                        <th class="align-middle">Altitud<sub>i</sub></th>
                        <th class="align-middle">X<sub>f</sub></th>
                        <th class="align-middle">Y<sub>f</sub></th>
                        <th class="align-middle">Altitud<sub>f</sub></th>
                        <th class="align-middle">T. Superficie<sub>i</sub></th>
                        <th class="align-middle">Imagen</th>
                        <th class="align-middle">Fecha</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($supRodaduras as  $supRodadura)
                        <tr>
                            <td>{{ $supRodadura->codigo }} </td>
                            <td>{{ $supRodadura->numero_tramo }} </td>
                            <td>{{ $supRodadura->progresiva_inicial }} </td>
                            <td>{{ $supRodadura->progresiva_final }} </td>
                            <td>{{ $supRodadura->coor_x_inicial }} </td>
                            <td>{{ $supRodadura->coor_y_inicial }} </td>
                            <td>{{ $supRodadura->altitud_inicial }} </td>
                            <td>{{ $supRodadura->coor_x_final }} </td>
                            <td>{{ $supRodadura->coor_y_final }} </td>
                            <td>{{ $supRodadura->altitud_final }} </td>
                            <td>{{ $supRodadura->tipo_superficie }} </td>
                            <td>
                                <figure class="imagen-container">
                                    <img src="{{ $supRodadura->codigo_imagen }}" width="30" height="30" alt="codigo">
                                </figure>
                            </td>
                            <td>{{ $supRodadura->fecha }} </td>

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
