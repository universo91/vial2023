@extends('adminlte::page')

@section('title', 'Puentes')

@section('content_header')
@stop

@section('content')
<div class="container">
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
            <a href="{{ route('registro_puente')}}" type="button" class="btn btn-success btn-flat"><i class="fas fa-plus-circle"></i> Agregar Nuevo</a>
            <a hidden type="button" class="btn btn-danger btn-flat">Exp. PDF</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-striped mt-4 nowrap" style="font-size: 15px;" >
                <thead  style="font-size:14px;color:rgb(255, 255, 255);background-color:#2e2170">
                    <tr>
                        <th class="align-middle">Provincia</th>
                        <th class="align-middle">Distrito</th>
                        <th class="align-middle">Ruta</th>
                        <th class="align-middle">Progresiva</th>
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
                        <th class="align-middle" style="background-color:#2e2170">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($puentes as  $puente)
                        <tr>
                            <td>{{ strtoupper($puente->ruta->distrito->provincia->nombre) }} </td>
                            <td>{{ strtoupper($puente->ruta->distrito->nombre ) }} </td>
                            <td>{{ $puente->ruta->codigo }} </td>
                            <td>{{ $puente->progresiva }} </td>
                            <td>{{ $puente->coordenada_x }} </td>
                            <td>{{ $puente->coordenada_y }} </td>
                            <td>{{ $puente->altitud }} </td>
                            <td>{{ $puente->tipo->clase->nombre }} </td>
                            <td>{{ $puente->tipo->nombre }} </td>
                            <td>{{ $puente->numero_vias }} </td>
                            <td>{{ $puente->tablero_rodadura }} </td>
                            <td>{{ $puente->longitud }} </td>
                            <td>{{ $puente->ancho_calzada }} </td>
                            <td>{{ $puente->condicion_funcional }} </td>
                            <td>{{ $puente->hidrografia }} </td>
                            <td>{{ $puente->created_at }} </td>
                            <td>
                                <a
                                    href="{{route('editar_puente', $puente->id) }}"
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/general/dataTable.js"></script>
@stop
