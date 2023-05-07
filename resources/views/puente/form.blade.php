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
                        <input readonly maxlength="40" type="text" class=" form-control form-control-sm" name="id" id="id" value="{{ isset($puente->id) ? $puente->id : ''  }}">
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
                        @if (isset($puente->id))
                            @foreach ($departamentos as $departamento )
                                <option value="{{ $departamento->id }}" {{ $departamento->id == $provincia->departamentos_id ? 'selected' : '' }}> {{ strtoupper($departamento->nombre) }}</option>
                            @endforeach
                        @else
                            @foreach ($departamentos as $departamento )
                                <option value="{{ $departamento->id }}"> {{ strtoupper($departamento->nombre) }}</option>
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
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="provincia" id="provincia">
                        <option value="">Seleccione provincia</option>
                        @if (isset($puente->id))
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
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="distrito" id="distrito">
                        <option value="">Seleccione distrito</option>
                        @if (isset($puente->id))
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
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="rutas_id" id="ruta">
                        <option value="">Seleccione ruta</option>
                        @if (isset($puente->id))
                            @foreach ($rutas as $ru)
                                <option value='{{ $ru->id }}' {{ $ru->id == $puente->rutas_id ? 'selected' : ''}} > {{ $ru->codigo }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="progresiva" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">progresiva Puente<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva" id="progresiva" value="{{ isset($puente->progresiva) ? $puente->progresiva : '' }}" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="coordenada_x" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. X<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x" id="coordenada_x" value="{{ isset($puente->coordenada_x) ? $puente->coordenada_x : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y" id="coordenada_y" value="{{ isset($puente->coordenada_y) ? $puente->coordenada_y : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud" id="altitud" value="{{ isset($puente->altitud) ? $puente->altitud : '' }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Clase puente</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="clases_id" id="clases_id">
                        <option value="">Seleccione clase</option>
                       @if (isset($puente->id))
                            @foreach ($clases as $cla)
                                <option value="{{ $cla->id }}" {{ $cla->id == $tipo->clases_id ? 'selected' : '' }}>{{ $cla->nombre }}</option>
                            @endforeach

                       @else
                            @foreach ($clasesPuente as $clase)
                                <option value="{{ $clase->id }}">{{ $clase->nombre }}</option>
                            @endforeach
                       @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tipo puente</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tipos_id" id="tipos_id">
                        <option value="">Seleccione tipo</option>
                        @if (isset($puente->id))
                            @foreach ($tipos as $tip)
                                <option value="{{ $tip->id }}" {{ $tip->id == $tipo->id ? 'selected' : '' }}>{{ $tip->nombre }}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Numero de vias</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="numero_vias">
                        <option >Seleccione numero de vias</option>
                        @if (isset($puente->id))

                            <option value="1" {{ $puente->numero_vias == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $puente->numero_vias == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $puente->numero_vias == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $puente->numero_vias == '4' ? 'selected' : '' }}>4</option>
                            <option value="5" {{ $puente->numero_vias == '5' ? 'selected' : '' }}>5</option>
                            <option value="6" {{ $puente->numero_vias == '6' ? 'selected' : '' }}>6</option>
                            <option value="7" {{ $puente->numero_vias == '7' ? 'selected' : '' }}>7</option>
                            <option value="8" {{ $puente->numero_vias == '8' ? 'selected' : '' }}>8</option>
                            <option value="9" {{ $puente->numero_vias == '9' ? 'selected' : '' }}>9</option>
                            <option value="10" {{ $puente->numero_vias == '10' ? 'selected' : '' }}>10</option>

                        @else
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

                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tablero rodadura</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tablero_rodadura" id="tablero_rodadura">
                        <option>Elige tablero rodadura</option>
                        @if (isset($puente->id))
                            <option value="concreto" {{ $puente->tablero_rodadura = 'concreto' ? 'selected' : '' }}>Concreto</option>
                            <option value="acero" {{ $puente->tablero_rodadura = 'acero' ? 'selected' : '' }}>Acero</option>
                            <option value="madera" {{ $puente->tablero_rodadura = 'madera' ? 'selected' : '' }}>Madera</option>

                        @else
                            <option value="concreto">Concreto</option>
                            <option value="acero">Acero</option>
                            <option value="madera">Madera</option>

                        @endif
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="longitud" id="longitud" value="{{ isset($puente->longitud) ? $puente->longitud : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho_calzada" id="ancho_calzada" value="{{ isset($puente->ancho_calzada) ? $puente->ancho_calzada : '' }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Condicion funcional</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="condicion_funcional" id="condicion_funcional">
                        <option>Seleccione condicion funcional</option>
                        @if (isset($puente->id))
                            <option value="buena" {{ $puente->condicion_funcional == 'buena' ? 'selected' : '' }}>Buena</option>
                            <option value="regular" {{ $puente->condicion_funcional == 'regular' ? 'selected' : '' }}>Regular</option>
                            <option value="mala" {{ $puente->condicion_funcional == 'mala' ? 'selected' : '' }}>Mala</option>
                        @else
                            <option value="buena">Buena</option>
                            <option value="regular">Regular</option>
                            <option value="mala">Mala</option>

                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">hidrografia</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="hidrografia" id="hidrografia">
                        <option >Hidrografia</option>
                        @if (isset($puente->id))
                            <option value="rio" {{ $puente->hidrogrfia == 'rio' ? 'selected' : '' }}>Rio</option>
                            <option value="quebrada" {{ $puente->hidrogrfia == 'quebrada' ? 'selected' : '' }}>Quebrada</option>
                        @else
                            <option value="rio">Rio</option>
                            <option value="quebrada">Quebrada</option>

                        @endif
                    </select>
                </div>
            </div>

        </fieldset>
    </div>

    <hr class="hidden-md hidden-lg">
    <div class="col-md-4 col-lg-3">
        <div class="btn-toolbar">
            <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                <a href="{{ route('lista_puentes') }}" style = "height:35px;padding-top:0px;background-color:#222222;" class="btn btn-block btn-dark btn-flat btn-sm">
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
