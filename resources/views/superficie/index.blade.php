@extends('adminlte::page')

@section('title', 'Superficie')

@section('content_header')
@stop

@section('content')
<div class="container tramo-content">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <img src="/img/superficie.png" alt="superficie">
            Superficies
        </h3>
        <hr>
    </div>
    <div class="raw mb-2">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ route('registro_superficie')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-plus-circle"></i> Agregar Nuevo</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped mt-4 order-column nowrap" style="font-size:15px;" >
                <thead class="" style="font-size:14px;color:rgb(255, 255, 255);background-color:#2e2170">
                    <tr>
                        <th class="align-middle">Provincia</th>
                        <th class="align-middle">Distrito</th>
                        <th class="align-middle">Ruta</th>
                        <th class="align-middle">Tramo</th>
                        <th class="align-middle">Estado</th>
                        <th class="align-middle">T. Superficie<sub>i</sub></th>
                        <th class="align-middle">Ancho</th>
                        <th class="align-middle">Imagen</th>
                        <th class="align-middle">Progresiva<sub>i</sub></th>
                        <th class="align-middle">X<sub>i</sub></th>
                        <th class="align-middle">Y<sub>i</sub></th>
                        <th class="align-middle">Altitud<sub>i</sub></th>
                        <th class="align-middle">Progresiva<sub>f</sub></th>
                        <th class="align-middle">X<sub>f</sub></th>
                        <th class="align-middle">Y<sub>f</sub></th>
                        <th class="align-middle">Altitud<sub>f</sub></th>
                        <th class="align-middle">Fecha<sub>f</sub></th>
                        <th class="align-middle" style="background-color:#2e2170">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($superficies as  $superficie)
                        <tr>
                            <td>{{ $superficie->tramo->ruta->distrito->provincia->nombre }} </td>
                            <td>{{ $superficie->tramo->ruta->distrito->nombre }} </td>
                            <td>{{ $superficie->tramo->ruta->codigo }} </td>
                            <td>{{ $superficie->tramo->numero_tramo }} </td>
                            <td>{{ $superficie->estado }} </td>
                            <td>{{ $superficie->tipo_superficie }} </td>
                            <td>{{ $superficie->ancho }} </td>
                            <td>
                                <figure class="imagen-container">
                                    <img src="{{ $superficie->codigo_imagen }}" width="30" height="30" alt="codigo">
                                </figure>
                            </td>
                            <td>{{ $superficie->progresiva_final }} </td>
                            <td>{{ $superficie->coor_inicial_x }} </td>
                            <td>{{ $superficie->coor_inicial_y }} </td>
                            <td>{{ $superficie->altitud_inicial }} </td>
                            <td>{{ $superficie->progresiva_final }} </td>
                            <td>{{ $superficie->coor_final_x }} </td>
                            <td>{{ $superficie->coor_final_y }} </td>
                            <td>{{ $superficie->altitud_final }} </td>
                            <td>{{ $superficie->created_at }} </td>
                            <td class='accion'>
                                <a
                                    href="{{ route('editar_superficie', $superficie->id) }}"
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
