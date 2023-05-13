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
                        @if (isset($provincia->departamentos_id))
                            @foreach ($departamentos as $departamento)
                                <option value='{{ $departamento->id }}' {{ $departamento->id == $provincia->departamentos_id ? 'selected' : ''}}> {{ strtoupper( $departamento->nombre ) }}</option>
                            @endforeach

                        @else
                            @foreach ($departamentos as $departamento)
                                <option value='{{ $departamento->id }}'> {{ strtoupper($departamento->nombre) }}</option>
                            @endforeach

                        @endif
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
                        @if (isset($senializacion->id))
                            @foreach ($provincias as $prov)
                                <option value='{{ $prov->id }}' {{ $prov->id == $distrito->provincias_id ? 'selected' : ''}}> {{ strtoupper( $prov->nombre)}} </option>
                            @endforeach
                        @endif
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
                        @if (isset($senializacion->id))
                            @foreach ($distritos as $dist)
                                <option value='{{ $dist->id }}' {{ $dist->id == $ruta->distritos_id ? 'selected' : ''}}> {{ strtoupper( $dist->nombre ) }} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ruta</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="rutas_id" id="rutas_id">
                        <option value="">Seleccione ruta</option>
                        @if (isset($senializacion->rutas_id))
                            @foreach ($rutas as $ru)
                                <option value='{{ $ru->id }}' {{ $ruta->id == $senializacion->rutas_id ? 'selected' : ''}}> {{ strtoupper( $ru->codigo ) }} </option>
                            @endforeach
                        @endif
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
                        @if (isset($senializacion->senial))

                            <option value="hito" {{ $senializacion->senial == 'hito' ? 'selected' : ''  }}>Hito</option>
                            <option value="señal" {{ $senializacion->senial == 'señal' ? 'selected' : ''  }}>Señal</option>
                        @else
                            <option value="hito">Hito</option>
                            <option value="señal">Señal</option>

                        @endif

                    </select>
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse">
                        <label for="codigo_imagen" class="control-label mr-4 text-dark font-weight-bold font-size-base " style="font-size: 15px;">Imagen de codigo<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9 ">
                        <div class="row ">
                            <div class="col-lg-12">
                                <label
                                    class="btn btn-outline-info file "
                                    for="codigo_imagen"
                                >
                                    <i class="fas fa-upload"></i> Elija la imagen que desea (PNG, JPG)
                                </label>
                                <input
                                    type="file"
                                    id="codigo_imagen"
                                    name="codigo_imagen"
                                    accept="image/*"
                                    class="imagen col-lg-12"
                                />
                            </div>
                            @if( isset($senializacion->codigo_imagen) )
                                <div id="vista_previa" class="col-lg-12">
                                    <p>Nombre de archivo: {{ substr( strrchr($senializacion->codigo_imagen,"/"),1) }}</p>
                                    <img src="{{ $senializacion->codigo_imagen }}" alt="imagen">
                                </div>
                            @else
                                <div id="vista_previa" class="col-lg-12">No hay imagen seleccionada para cargar</div>
                            @endif
                        </div>

                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Clasificacion</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="clasificacion">
                        <option >Elige clasificacion</option>
                        @if (isset($senializacion->clasificacion))
                            <option value="informativa" {{ $senializacion->clasificacion == 'informativa' ? 'selected' : ''  }}>Informativa</option>
                            <option  value="preventiva" {{ $senializacion->clasificacion == 'preventiva' ? 'selected' : ''  }}>Preventiva</option>
                        @else
                            <option value="informativa">Informativa</option>
                            <option  value="preventiva">Preventiva</option>
                        @endif
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva" id="progresiva" value="{{ isset($senializacion->progresiva) ? $senializacion->progresiva : ''}}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Lado</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="lado">
                       <option >Elige lado</option>
                        @if (isset($senializacion->lado))
                            <option value="izquierda" {{ $senializacion->lado == 'izquierda' ? 'selected' : '' }}>izquierda</option>
                            <option value="derecha" {{ $senializacion->lado == 'derecha' ? 'selected' : '' }}>derecha</option>
                        @else
                            <option value="izquierda">izquierda</option>
                            <option value="derecha">derecha</option>

                        @endif

                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Soporte</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="soporte">
                        <option >Elige soporte</option>
                        @if (isset($senializacion->soporte))
                            <option value="poste" {{ $senializacion->soporte == 'poste' ? 'selected' : '' }}>Poste</option>
                        @else
                            <option value="poste">Poste</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">material</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="material">
                        <option >Elige material</option>
                        @if (isset($senializacion->material))
                            <option value="acero" {{ $senializacion->material == 'acero' ? 'selected' : '' }}>Acero</option>
                            <option value="concreto" {{ $senializacion->material == 'concreto' ? 'selected' : '' }}>Concreto</option>
                        @else
                            <option value="acero">Acero</option>
                            <option value="concreto">Concreto</option>
                        @endif

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Zona</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="zona">
                        <option>Elige zona</option>
                        @if (isset($senializacion->zona))
                            <option value="17" {{ $senializacion->zona = '17' ? 'selected' : '' }}>17</option>
                            <option value="18" {{ $senializacion->zona = '18' ? 'selected' : '' }}>18</option>
                            <option value="19" {{ $senializacion->zona = '19' ? 'selected' : '' }}>19</option>
                        @else
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                        @endif

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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x" id="coordenada_x" value="{{ isset($senializacion->coordenada_x) ? $senializacion->coordenada_x : ''}}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y" id="coordenada_y" value="{{ isset($senializacion->coordenada_y) ? $senializacion->coordenada_y : ''}}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud" id="altitud" value="{{ isset($senializacion->altitud) ? $senializacion->altitud : ''}}" required>
                    </div>
                </div>
            </div>

        </fieldset>
    </div>

    <hr class="hidden-md hidden-lg">
    <div class="col-md-4 col-lg-2">
        <div class="btn-toolbar">
            <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                <a href="{{ route('lista_senializaciones') }}" style = "height:35px;padding-top:0px;background-color:#222222;" class="btn btn-block btn-dark btn-flat btn-sm">
                    <i class="glyphicon glyphicon-chevron-left"> </i>
                    Atras
                </a>
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
