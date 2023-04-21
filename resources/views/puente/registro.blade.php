@extends('adminlte::page')

@section('title', 'registro ruta')

@section('content_header')
@stop

@section('content')

<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-3">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="" alt="">
                Puentes
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Puente detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('registrarPuente') }}" method="POST">
                    @csrf
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
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="departamento" id="departamento">
                                            <option value="">Seleccione departamento</option>
                                            @foreach ($departamentos as $departamento )
                                                 <option value="{{ $departamento->id }}"> {{ $departamento->nombre }}</option>
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
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="ruta_id" id="ruta">
                                            <option value="">Seleccione ruta</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tramo</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tramos_id" id="tramos">
                                            <option value="">Seleccione tramo</option>
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

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Clase puente</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="clases_id" id="clases_id">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tipo puente</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tipos_id" id="tipos_id">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Numero de vias</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="numero_vias">
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
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tablero rodadura</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tablero_rodadura" id="tablero_rodadura">
                                            <option value="concreto">Concreto</option>
                                            <option value="acero">Acero</option>
                                            <option value="madera">Madera</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="longitud" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Longitud<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="longitud" id="longitud" value="" required>
                                        </div>
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
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Condicion funcional</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="condicion_funcional" id="condicion_funcional">
                                            <option value="buena">Buena</option>
                                            <option value="regular">Regular</option>
                                            <option value="mala">Mala</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">hidrografia</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="hidrografia" id="hidrografia">
                                            <option value="rio">Rio</option>
                                            <option value="quebrada">Quebrada</option>
                                        </select>
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
@stop
