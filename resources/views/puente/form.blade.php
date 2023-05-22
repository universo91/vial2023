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
                        <option >Seleccione departamento</option>
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
                        <option>Seleccione provincia</option>
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
                        <option>Seleccione distrito</option>
                        @if (isset($puente->id))
                            @foreach ($distritos as $dist)
                                <option value='{{ $dist->id }}' {{ $dist->id == $ruta->distritos_id ? 'selected' : ''}}> {{ strtoupper( $dist->nombre ) }} </option>



                            @endforeach
                        @endif
                        @error('distrito')
                            <small class="mensaje-error">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ruta</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9 @error('rutas_id') is-invalid @enderror"  name="rutas_id" id="ruta">
                        <option>Seleccione ruta</option>
                        @if (isset($puente->id))
                            @foreach ($rutas as $ru)
                                <option  value='{{ $ru->id }}' {{ $ru->id == $puente->rutas_id ? 'selected' : ''}} > {{ $ru->codigo }}</option>
                            @endforeach
                        @endif

                    </select>
                    @error('rutas_id')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="progresiva" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">progresiva Puente</label>
                    </div>
                    <div class="col-lg-9">

                        @if (old('progresiva') != null )
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('progresiva') is-invalid @enderror" name="progresiva" id="progresiva" value="{{ old('progresiva')}}">

                        @else
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('progresiva') is-invalid @enderror" name="progresiva" id="progresiva" value="{{ isset($puente->progresiva) ? $puente->progresiva : old('progresiva') }}">
                        @endif

                        @error('progresiva')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="coordenada_x" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. X</label>
                    </div>
                    <div class="col-lg-9">

                        @if (old('coordenada_x') != null )
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('coordenada_x') is-invalid @enderror" name="coordenada_x" id="coordenada_x" value="{{ old('coordenada_x')}}">

                        @else
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('coordenada_x') is-invalid @enderror" name="coordenada_x" id="coordenada_x" value="{{ isset($puente->coordenada_x) ? $puente->coordenada_x : old('coordenada_x') }}">

                        @endif

                        @error('coordenada_x')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="coordenada_y" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Coord. Y</label>
                    </div>
                    <div class="col-lg-9">
                        @if (old('coordenada_y') != null )
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('coordenada_y') is-invalid @enderror" name="coordenada_y" id="coordenada_y" value="{{ old('coordenada_y')}}">

                        @else
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('coordenada_y') is-invalid @enderror" name="coordenada_x" id="coordenada_y" value="{{ isset($puente->coordenada_y) ? $puente->coordenada_y : old('coordenada_y') }}">

                        @endif

                        @error('coordenada_y')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="altitud" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Altitud</label>
                    </div>
                    <div class="col-lg-9">
                        @if (old('altitud') != null )
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('altitud') is-invalid @enderror" name="altitud" id="altitud" value="{{ old('altitud')}}">

                        @else
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('altitud') is-invalid @enderror" name="altitud" id="altitud" value="{{ isset($puente->altitud) ? $puente->altitud : old('altitud') }}">

                        @endif

                        @error('altitud')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                                @if(old('clases_id') == $cla->id )
                                <option value="{{ $cla->id }}" selected>{{ $cla->nombre }}</option>
                                @else
                                <option value="{{ $cla->id }}" {{ $cla->id == $tipo->clases_id ? 'selected' : '' }}>{{ $cla->nombre }}</option>
                                @endif
                            @endforeach

                       @else
                            @foreach ($clasesPuente as $cla)
                                @if(old('clases_id') == $cla->id )
                                    <option value="{{ $cla->id }}" selected>{{ $cla->nombre }}</option>
                                @else
                                    <option value="{{ $cla->id }}">{{ $cla->nombre }}</option>
                                @endif

                            @endforeach
                       @endif

                    </select>
                    @error('clases_id')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
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
                                @if(old('tipos_id') == $tip->id)
                                    <option value="{{ $tip->id }}" selected>{{ $tip->nombre }}</option>
                                @else
                                    <option value="{{ $tip->id }}" {{ $tip->id == $tipo->id ? 'selected' : old('tipos_id') }}>{{ $tip->nombre }}</option>
                                @endif

                            @endforeach
                        @endif

                    </select>
                    @error('tipos_id')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
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
                            @if(old('numero_vias') != null )
                                <option value="1" {{ old('numero_vias') == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('numero_vias') == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('numero_vias') == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('numero_vias') == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('numero_vias') == '5' ? 'selected' : '' }}>5</option>
                                <option value="6" {{ old('numero_vias') == '6' ? 'selected' : '' }}>6</option>
                                <option value="7" {{ old('numero_vias') == '7' ? 'selected' : '' }}>7</option>
                                <option value="8" {{ old('numero_vias') == '8' ? 'selected' : '' }}>8</option>
                                <option value="9" {{ old('numero_vias') == '9' ? 'selected' : '' }}>9</option>
                                <option value="10" {{ old('numero_vias') == '10' ? 'selected' : '' }}>10</option>
                            @else
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
                            @endif
                        @else
                            <option value="1" {{ old('numero_vias') == 1 ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('numero_vias') == 2 ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('numero_vias') == 3 ? 'selected' : '' }}>3</option>
                            <option value="4" {{ old('numero_vias') == 4 ? 'selected' : '' }}>4</option>
                            <option value="5" {{ old('numero_vias') == 5 ? 'selected' : '' }}>5</option>
                            <option value="6" {{ old('numero_vias') == 6 ? 'selected' : '' }}>6</option>
                            <option value="7" {{ old('numero_vias') == 7 ? 'selected' : '' }}>7</option>
                            <option value="8" {{ old('numero_vias') == 8 ? 'selected' : '' }}>8</option>
                            <option value="9" {{ old('numero_vias') == 9 ? 'selected' : '' }}>9</option>
                            <option value="10" {{ old('numero_vias') == 10 ? 'selected' : '' }}>10</option>

                        @endif
                    </select>
                    @error('numero_vias')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
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
                            @if(old('tablero_rodadura') != null )
                                <option value="concreto" {{ old('tablero_rodadura') == 'concreto' ? 'selected' : '' }}>Concreto</option>
                                <option value="acero" {{ old('tablero_rodadura') == 'acero' ? 'selected' : '' }}>Acero</option>
                                <option value="madera" {{ old('tablero_rodadura') == 'madera' ? 'selected' : '' }}>Madera</option>


                            @else
                                <option value="concreto" {{ $puente->tablero_rodadura == 'concreto' ? 'selected' : '' }}>Concreto</option>
                                <option value="acero" {{ $puente->tablero_rodadura == 'acero' ? 'selected' : '' }}>Acero</option>
                                <option value="madera" {{ $puente->tablero_rodadura == 'madera' ? 'selected' : '' }}>Madera</option>

                            @endif
                        @else
                            <option value="concreto" {{ old('tablero_rodadura') == 'concreto' ? 'selected' : '' }}>Concreto</option>
                            <option value="acero" {{ old('tablero_rodadura') == 'acero' ? 'selected' : '' }}>Acero</option>
                            <option value="madera" {{ old('tablero_rodadura') == 'madera' ? 'selected' : '' }}>Madera</option>

                        @endif
                    </select>
                    @error('tablero_rodadura')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="longitud" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Longitud</label>
                    </div>
                    <div class="col-lg-9">
                        @if (old('longitud') != null )
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('longitud') is-invalid @enderror" name="longitud" id="longitud" value="{{ old('longitud')}}">

                        @else
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('longitud') is-invalid @enderror" name="longitud" id="longitud" value="{{ isset($puente->longitud) ? $puente->longitud : old('longitud') }}">

                        @endif

                        @error('longitud')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="ancho_calzada" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ancho calzada</label>
                    </div>
                    <div class="col-lg-9">
                        @if (old('ancho_calzada') != null )
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('ancho_calzada') is-invalid @enderror" name="ancho_calzada" id="ancho_calzada" value="{{ old('ancho_calzada')}}">

                        @else
                            <input maxlength="40" type="text" class=" form-control form-control-sm @error('ancho_calzada') is-invalid @enderror" name="ancho_calzada" id="ancho_calzada" value="{{ isset($puente->ancho_calzada) ? $puente->ancho_calzada : old('ancho_calzada') }}">

                        @endif

                        @error('ancho_calzada')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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

                            @if( old('condicion_funcional') != null )
                                <option value="buena" {{ old('condicion_funcional') == 'buena' ? 'selected' : '' }}>Buena</option>
                                <option value="regular" {{ old('condicion_funcional') == 'regular' ? 'selected' : '' }}>Regular</option>
                                <option value="mala" {{ old('condicion_funcional') == 'mala' ? 'selected' : '' }}>Mala</option>
                            @else
                                <option value="buena" {{ $puente->condicion_funcional == 'buena' ? 'selected' : '' }}>Buena</option>
                                <option value="regular" {{ $puente->condicion_funcional == 'regular' ? 'selected' : '' }}>Regular</option>
                                <option value="mala" {{ $puente->condicion_funcional == 'mala' ? 'selected' : '' }}>Mala</option>

                            @endif

                        @else
                            <option value="buena" {{ old('condicion_funcional') == 'buena' ? 'selected' : '' }}>Buena</option>
                            <option value="regular" {{ old('condicion_funcional') == 'regular' ? 'selected' : '' }}>Regular</option>
                            <option value="mala" {{ old('condicion_funcional') == 'mala' ? 'selected' : '' }}>Mala</option>

                        @endif
                    </select>
                    @error('condicion_funcional')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse">
                        <label for="codigo_imagen" class="control-label mr-4 text-dark font-weight-bold font-size-base " style="font-size: 15px;">Imagen</label>
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
                            @if( isset($puente->codigo_imagen) )
                                <div id="vista_previa" class="col-lg-12">
                                    <p>Nombre de archivo: {{ substr( strrchr($puente->codigo_imagen,"/"),1) }}</p>
                                    <img src="{{ $puente->codigo_imagen }}" alt="imagen">
                                </div>
                            @else
                                <div id="vista_previa" class="col-lg-12">No hay imagen seleccionada para cargar</div>
                            @endif
                        </div>

                    </div>
                    @error('codigo_imagen')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">hidrografia</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="hidrografia" id="hidrografia">
                        <option >Seleccione Hidrografia</option>
                        @if (isset($puente->id))
                            @if( old('hidrografia') != null)
                                <option value="rio" {{ old('hidrografia') == 'rio' ? 'selected' : '' }}>Rio</option>
                                <option value="quebrada" {{ old('hidrografia') == 'quebrada' ? 'selected' : '' }}>Quebrada</option>

                            @else
                                <option value="rio" {{ $puente->hidrografia == 'rio' ? 'selected' : '' }}>Rio</option>
                                <option value="quebrada" {{ $puente->hidrografia == 'quebrada' ? 'selected' : '' }}>Quebrada</option>

                            @endif


                        @else
                            <option value="rio" {{ old('hidrografia') == 'rio' ? 'selected' : '' }}>Rio</option>
                            <option value="quebrada" {{ old('hidrografia') == 'quebrada' ? 'selected' : '' }}>Quebrada</option>

                        @endif
                    </select>
                    @error('hidrografia')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
                </div>
            </div>

        </fieldset>
    </div>

    <hr class="hidden-md hidden-lg">
    <div class="col-md-4 col-lg-2">
        <div class="btn-toolbar">
            <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                <a href="{{ route('lista_puentes') }}"
                    class="btn btn-block btn-dark btn-flat btn-sm"
                    style = "line-height:16px;font-size:15px;height:35px;background-color:#2d2c2c;"
                    onmouseover="this.style.backgroundColor='#070707'"
                    onmouseout="this.style.backgroundColor='#2d2c2c'"
                >
                    <i class="glyphicon glyphicon-chevron-left"> </i>
                    Atras
                </a>
            </div>
            <div class="btn-group-vertical btn-group-lg mt-3" style="width: 100%;">
                <button
                    type="submit"
                    class="btn btn-block btn-sm btn-success btn-flat btn-guardar"
                    style="line-height: 16px;font-size: 15px;height:35px;background-color:#48c71d;"
                    onmouseover="this.style.backgroundColor='#318b12'"
                    onmouseout="this.style.backgroundColor='#48c71d'"
                >
                    <i class="glyphicon glyphicon-chevron-left"> </i>
                    Guardar
                </button>
            </div><p></p>

        </div>

    </div>
</div>


