@extends('adminlte::page')

@section('title', 'registro señalizacion')

@section('content_header')
@stop

@section('content')

<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-3">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="" alt="">
                Señalizaciones
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Señalizacion detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('registrarSenializacion') }}" method="POST">
                    <div class="row">
                        <div class="col-md-8 col-lg-9">
                            <fieldset class="form-horizontal">

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse">
                                            <label for="id" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">ID</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input hidden maxlength="40" type="text" class=" form-control form-control-sm" name="id" id="id" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Departamento <span class="text-danger"> * </span> </label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="departamento_id" id="departamento">
                                            <option value="">Seleccione departamento</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Provincia</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="provincia_id" id="provincia">
                                            <option value="">Seleccione provincia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Distrito</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="distrito_id" id="distrito">
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
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Señal</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="senial">
                                            <option value="señal">Señal</option>
                                            <option value="hito">Hito</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Clasificacion</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="clasificacion">
                                            <option value="informativa">Informativa</option>
                                            <option value="preventiva">Preventiva</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="progresiva" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva" id="progresiva" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Lado</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="lado">
                                            <option value="izquierda">izquierda</option>
                                            <option value="derecha">derecha</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Soporte</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="soporte">
                                            <option value="poste">Poste</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">material</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="material">
                                            <option value="acero">Acero</option>
                                            <option value="concreto">Concreto</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Zona</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="zona">
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
                                            <label for="coordenada_x" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. X<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x" id="coordenada_x" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coordenada_y" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. Y<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y" id="coordenada_y" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="altitud" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Altitud<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud" id="altitud" value="" required>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <hr class="hidden-md hidden-lg">
                        <div class="col-md-4 col-lg-3">
                            <div class="btn-toolbar">
                                <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                                    <button type="submit" style = "height:35px;padding-top:0px;background-color:#222222;" class="btn btn-block btn-dark btn-flat btn-sm">
                                        <i class="glyphicon glyphicon-chevron-left"> </i>
                                        Atras
                                    </button>
                                </div>
                                <div class="btn-group-vertical btn-group-lg mt-3" style="width: 100%;">
                                    <button type="submit" style="height:35px;padding-top:0px;background-color:#3FB618;" class="btn btn-block btn-sm btn-success btn-flat">
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
    <script src="/js/general/generico.js"> </script>
    <script src="/js/superficie/registro.js"></script>
@stop
