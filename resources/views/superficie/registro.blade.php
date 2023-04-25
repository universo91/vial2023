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
                Superficies
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Superficie detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('registrarSuperficie') }}" method="POST">
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
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="rutas_id" id="ruta" >
                                            <option value="">Seleccione ruta</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tramo</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tramos_id" id="tramo" >
                                            <option value="">Seleccione tramo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">estado</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="estado" id="estado">
                                            <option value="malo">Malo</option>
                                            <option value="regular">Regular</option>
                                            <option value="bueno">Bueno</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tipo superficie</label>
                                        </div>
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tipo_superficie" id="tipo_superficie">
                                            <option value="pavimento asfaltico">Pavimento asfaltico</option>
                                            <option value="pavimento de concreto">Pavimento de concreto</option>
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
                                            <label for="ancho" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ancho<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho" id="ancho" value="" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="progresiva_inicial" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva inicial<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_inicial" id="progresiva_inicial" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_inicial_x" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. inicial X<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_inicial_x" id="coor_inicial_x" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_inicial_y" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. inicial Y<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_inicial_y" id="coor_inicial_y" value="" required>
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
                                            <label for="progresiva_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva final<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_final" id="progresiva_final" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_final_x" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. final X<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_final_x" id="coor_final_x" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coor_final_y" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. final Y<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_final_y" id="coor_final_y" value="" required>
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
    <script src="/js/superficie/registro.js"></script>
@stop
