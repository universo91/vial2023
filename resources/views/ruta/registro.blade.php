@extends('adminlte::page')

@section('title', 'registro ruta')

@section('content_header')
@stop

@section('content')

<div class="container">
    <div class="page-header">
        <h3 class="font-weight-light mb-3 pt-5">
            <a style="text-decoration:none; color:inherit" href="">
                <img src="" alt="">
                Rutas
            </a>
        </h3>
        <hr>
    </div>

    <div class="col-xs-12 detail-view">
        <div class="card card-light mb-3">
            <h6 class="card-header">
                <div class="panel-heading">
                    <Strong>Ruta detalles</Strong>
                </div>
            </h6>
            <div class="card-body">
                <hr class="hidden-xs hidden-md">
                <form action="{{ route('registrarRuta') }}" method="POST">
                    <div class="row">

                        <div class="col-md-8 col-lg-10">
                            <fieldset class="form-horizontal">

                                @csrf

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse">
                                            <label for="id" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">ID</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input hidden maxlength="40" type="text" class=" form-control form-control-sm" name="id" id="id" value="" >
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

                                            @foreach ($departamentos as $departamento)
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
                                        <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="distritos_id" id="distrito">
                                            <option value="">Seleccione distrito</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="codigo" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Codigo<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="codigo" id="codigo" value="{{ old('codigo') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">

                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="punto_inicio" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Pto. inicial ruta<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="punto_inicio" id="punto_inicio" value="{{ old('punto_inicio') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coordenada_x_inicio" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. incial X <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x_inicio" id="coordenada_x_inicio" value="{{ old('coordenada_x_inicio') }}" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coordenada_y_inicio" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. inicial Y <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y_inicio" id="coordenada_y_inicio" value="{{ old('coordenada_y_inicio') }}" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="altitud_punto_inicial" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Altitud inicial<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_punto_inicial" id="altitud_inicial" value="{{ old('altitud_punto_inicial') }}" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="progresiva_punto_inicial" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva inicial<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_punto_inicial" id="progresiva_inicial" value="{{ old('progresiva_punto_inicial') }}" required>
                                        </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="punto_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Pto. final ruta<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="punto_final" id="pto_final_ruta" value="{{ old('punto_final') }}" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group ">
                                    <hr hidden class="hidden-md hidden-lg">
                                <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coordenada_x_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. final X <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x_final" id="coord_final_x" value="{{ old('coordenada_x_final') }}" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group >
                                    <hr hidden class="hidden-md hidden-lg">
                                <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="coordenada_y_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. final Y <span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y_final" id="coord_final_y" value="{{ old('coordenada_y_final') }}" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="altitud_punto_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Altitud final<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_punto_final" id="altitud_final" value="{{ old('altitud_punto_final') }}" required>
                                        </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <hr hidden class="hidden-md hidden-lg">
                                    <div class="row">
                                        <div class="col-lg-3 d-flex flex-row-reverse ">
                                            <label for="progresiva_punto_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva final<span class="text-danger"> *</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_punto_final" id="progresiva_final" value="{{ old('progresiva_punto_final') }}" required>
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
                                    <button type="submit" style="line-height:16px;font-size:15px;height:35px;background-color:#3FB618;" class="btn btn-block btn-sm btn-success btn-flat">
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
    <script src="/js/rutas/registro.js"></script>
@stop

