@extends('adminlte::page')

@section('title', 'registro tramo')

@section('content_header')
@stop

@section('content')

<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="" alt="">
                Tramos
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Tramo detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('registrarTramo') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 col-lg-10">
                            <fieldset class="form-horizontal">

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse">
                                            <label for="id" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">ID</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input hidden maxlength="40" type="text" class=" form-control form-control-sm" name="id" id="id" value=""
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Departamento <span class="text-danger"> * </span> </label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="departamento" id="departamento">
                                            <option value="">Seleccione departamanto</option>
                                            @foreach ($departamentos as $departamento)
                                                <option value=" {{ $departamento->id }} "> {{  $departamento->nombre }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Provincia</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="provincia" id="provincia">
                                            <option value="">Seleccione provincia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Distrito</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="distrito" id="distrito">
                                            <option value="">Seleccione distrito</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ruta</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="rutas_id" id="ruta">
                                            <option value="">Seleccione ruta</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="numero_tramo" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Numero de tramo<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="numero_tramo" id="numero_tramo" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tipo de terreno</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tipo_terreno" id="tipo_terreno">
                                            <option value="plano">Plano</option>
                                            <option value="ondulado">Ondulado</option>
                                            <option value="accidentado">Accidentado</option>
                                            <option value="escarpado">Escarpado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Estado via</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="estado_via" id="estado_via">
                                            <option value="bueno">Bueno</option>
                                            <option value="malo">Malo</option>
                                            <option value="regular">Regular</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tipo superficie</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tipo_superficie" id="tipo_superficie">
                                            <option value="pavimento asfaltico">pavimento asfaltico</option>
                                            <option value="pavimento de concreto">pavimento de concreto</option>
                                            <option value="afirmado">Afirmado</option>
                                            <option value="sin afirmar">Sin afirmar</option>
                                            <option value="trocha carrozable">Trocha carrozable</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coord_incial_x" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva" id="progresiva" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_tramo_x_inicial" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. inicial X <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_x_inicial" id="coor_x_inicial" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_tramo_y_inicial" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. inicial Y <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_y_inicial" id="coor_y_inicial" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="altitud_inicial" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Altitud inicial<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_inicial" id="altitud_inicial" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_tramo_x_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. final X <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_x_final" id="coor_x_final" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_tramo_y_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. final Y <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_y_final" id="coor_y_final" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="altitud_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Altitud final<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_final" id="altitud_final" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Zona</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="zona" id="zona">
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="descripcion_elementos" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Descripcion elementos<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="descripcion_elementos" id="descripcion_elementos" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="codigo_imagen" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Imagen de codigo<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="codigo_imagen" id="codigo_imagen" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="tramo_inicio" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Inicio de tramo<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="tramo_inicio" id="tramo_inicio" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group >
                                    <hr hidden class="hidden-md hidden-lg">
                                <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="tramo_fin" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Fin de tramo <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="tramo_fin" id="tramo_fin" value="" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Numero de carriles</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="numero_carriles" id="numero_carriles">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="ancho_calzada" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ancho calzada<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho_calzada" id="ancho_calzada" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="ancho_berma_izquierda" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ancho berma izquierda<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho_berma_izquierda" id="ancho_berma_izquierda" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="ancho_berma_derecha" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ancho berma derecha<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho_berma_derecha" id="ancho_berma_derecha" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Identicacacion calzada</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="identicacacion_calzada">
                                            <option value="CD">CD</option>
                                            <option value="UC">UC</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="observaciones" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Obervaciones<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="observaciones" id="observaciones" value="" required>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <hr class="hidden-md hidden-lg">
                        <div class="col-md-4 col-lg-2">
                            <div class="btn-toolbar">
                                <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                                    <button type="submit" style = "line-height:16px;font-size:15px;height:35px;background-color:#222222;" class="btn btn-block btn-dark btn-flat btn-sm">
                                        <i class="glyphicon glyphicon-chevron-left"> </i>
                                        Atras
                                    </button>
                                </div>
                                <div class="btn-group-vertical btn-group-lg mt-3" style="width: 100%;">
                                    <button type="submit" class="btn btn-block btn-sm btn-success btn-flat" style="line-height:16px;font-size:15px;height:35px;background-color:#3FB618;" >
                                        <i class="glyphicon glyphicon-chevron-left"> </i>
                                        Guardar
                                    </button>
                                </div><p></p>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/general/generico.js"></script>
    <script src="/js/superficie/registro.js"></script>
@stop
