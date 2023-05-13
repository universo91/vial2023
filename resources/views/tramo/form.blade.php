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
                        <input readonly maxlength="40" type="text" class=" form-control form-control-sm ocultar" name="id" id="id" value="{{ isset( $tramo->id ) ? $tramo->id : '' }}" />
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
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="provincia" id="provincia">
                        <option value="">Seleccione provincia</option>
                        @if (isset($distrito->provincias_id))
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
                        @if (isset($ruta->distritos_id))
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
                        @if (isset($tramo->rutas_id))
                            @foreach ($rutas as $ru)
                                <option value='{{ $ru->id }}' {{ $ru->id == $tramo->rutas_id ? 'selected' : ''}} > {{ $ru->codigo }}</option>
                            @endforeach
                        @endif

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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="numero_tramo" id="numero_tramo" value="{{ isset($tramo->numero_tramo) ?  $tramo->numero_tramo : '' }}" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tipo de terreno</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tipo_terreno" id="tipo_terreno">
                        @if (isset($tramo->tipo_terreno))
                            <option value="plano"  {{ $tramo->tipo_terreno == 'plano' ? 'selected' : '' }}>Plano</option>
                            <option value="ondulado" {{ $tramo->tipo_terreno == 'ondulado' ? 'selected' : '' }}>Ondulado</option>
                            <option value="accidentado" {{ $tramo->tipo_terreno == 'accidentado' ? 'selected' : '' }}>Accidentado</option>
                            <option value="escarpado" {{ $tramo->tipo_terreno == 'escarpado' ? 'selected' : '' }}>Escarpado</option>
                        @else
                            <option value="plano"}>Plano</option>
                            <option value="ondulado">Ondulado</option>
                            <option value="accidentado">Accidentado</option>
                            <option value="escarpado">Escarpado</option>

                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Estado via</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="estado_via" id="estado_via">
                        @if (isset($tramo->estado_via))
                            <option value="bueno" {{ $tramo->estado_via == 'bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="malo" {{ $tramo->estado_via == 'malo' ? 'selected' : '' }}>Malo</option>
                            <option value="regular" {{ $tramo->estado_via == 'regular' ? 'selected' : '' }}>Regular</option>
                        @else
                            <option value="bueno">Bueno</option>
                            <option value="malo">Malo</option>
                            <option value="regular">Regular</option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Tipo superficie</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="tipo_superficie" id="tipo_superficie">
                        @if (isset( $tramo->tipo_superficie ))
                            <option value="pavimento asfaltico" {{ $tramo->tipo_superficie == 'pavimento asfaltico' ? 'selected' : '' }}>pavimento asfaltico</option>
                            <option value="pavimento de concreto" {{ $tramo->tipo_superficie == 'pavimento de concreto' ? 'selected' : '' }}>pavimento de concreto</option>
                            <option value="afirmado" {{ $tramo->tipo_superficie == 'afirmado' ? 'selected' : '' }}>Afirmado</option>
                            <option value="sin afirmar" {{ $tramo->tipo_superficie == 'sin afirmar' ? 'selected' : '' }}>Sin afirmar</option>
                            <option value="trocha carrozable" {{ $tramo->tipo_superficie == 'trocha carrozable' ? 'selected' : '' }}>Trocha carrozable</option>

                        @else
                            <option value="pavimento asfaltico">pavimento asfaltico</option>
                            <option value="pavimento de concreto">pavimento de concreto</option>
                            <option value="afirmado">Afirmado</option>
                            <option value="sin afirmar">Sin afirmar</option>
                            <option value="trocha carrozable">Trocha carrozable</option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="progresiva_inicial" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva Inicial <span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_inicial" id="progresiva_inicial" value="{{ isset($tramo->progresiva_inicial) ? $tramo->progresiva_inicial : '' }}" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="progresiva_final" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Progresiva Final <span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_final" id="progresiva_final" value="{{ isset( $tramo->progresiva_final ) ? $tramo->progresiva_final : ''}}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_x_inicial" id="coor_x_inicial" value=" {{ isset($tramo->coor_x_inicial) ? $tramo->coor_x_inicial : '' }}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_y_inicial" id="coor_y_inicial" value=" {{ isset($tramo->coor_y_inicial) ? $tramo->coor_y_inicial : '' }}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_inicial" id="altitud_inicial" value=" {{ isset($tramo->altitud_inicial) ? $tramo->altitud_inicial : '' }}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_x_final" id="coor_x_final" value=" {{ isset($tramo->coor_x_final) ? $tramo->coor_x_final : '' }}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_y_final" id="coor_y_final" value=" {{ isset($tramo->coor_y_final) ? $tramo->coor_y_final : '' }}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_final" id="altitud_final" value=" {{ isset($tramo->altitud_final) ? $tramo->altitud_final : '' }}" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Zona</label>
                    </div>
                    <select class="form-control form-control-sm col-lg-9"  name="zona" id="zona">
                        @if (isset($tramo->zona))
                            <option value="17" {{ $tramo->zona == '17' ? 'selected' : ''}}>17</option>
                            <option value="18" {{ $tramo->zona == '18' ? 'selected' : ''}}>18</option>
                            <option value="19" {{ $tramo->zona == '19' ? 'selected' : ''}}>19</option>
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
                    <div class="col-lg-3 d-flex flex-row-reverse">
                        <label for="descripcion_elementos" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Punto notable<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" style="" class="form-control form-control-sm" name="punto_notable" id="punto_notable" value="{{ isset($tramo->punto_notable) ? $tramo->punto_notable : ''}}" >
                    </div>
                </div>
            </div>

           {{--  <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse">
                        <label for="codigo_imagen" class="control-label mr-4 text-dark font-weight-bold font-size-base " style="font-size: 15px;">Imagen de codigo<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9 file">
                       <label for="imagen" class=" btn btn-outline-info">
                           <i class="fas fa-upload"></i>
                           Elige una imagen
                        </label>
                        <input class="form-control form-control-sm imagen" accept="image/*" type="file" name="codigo_imagen" id="imagen">
                    </div>
                </div>
            </div> --}}

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
                                    class="btn btn-outline-info file"
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
                            @if( isset($tramo->codigo_imagen) )
                                <p id="vista_previa" class="col-lg-12">
                                    <p> {{ $tramo->codigo_imagen}}</p>
                                    <img src="{{ $tramo->codigo_imagen }}" alt="imagen">
                                </p>
                            @else
                               {{--  <p id="vista_previa" class="col-lg-12">No hay imagen seleccionada para cargar</p> --}}
                            @endif
                        </div>

                    </div>

                </div>
            </div>

            <div class="form-group ">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="tramo_inicio" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px; Apadding:0;">Inicio de tramo<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="tramo_inicio" id="tramo_inicio" value="{{ isset($tramo->tramo_inicio) ? $tramo->tramo_inicio : ''}}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="tramo_fin" id="tramo_fin" value="{{ isset($tramo->tramo_fin) ? $tramo->tramo_fin : ''}}" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Numero de carriles</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="numero_carriles" id="numero_carriles">
                        @if (isset( $tramo->numero_carriles))
                            <option value="1" {{ $tramo->numero_carriles == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $tramo->numero_carriles == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $tramo->numero_carriles == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $tramo->numero_carriles == '4' ? 'selected' : '' }}>4</option>
                            <option value="5" {{ $tramo->numero_carriles == '5' ? 'selected' : '' }}>5</option>
                            <option value="6" {{ $tramo->numero_carriles == '6' ? 'selected' : '' }}>6</option>
                            <option value="7" {{ $tramo->numero_carriles == '7' ? 'selected' : '' }}>7</option>
                            <option value="8" {{ $tramo->numero_carriles == '8' ? 'selected' : '' }}>8</option>
                            <option value="9" {{ $tramo->numero_carriles == '9' ? 'selected' : '' }}>9</option>
                            <option value="10" {{ $tramo->numero_carriles  == '10' ? 'selected' : '' }}>10</option>

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
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="ancho_calzada" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ancho calzada<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho_calzada" id="ancho_calzada" value="{{ isset($tramo->ancho_calzada) ? $tramo->ancho_calzada : ''}}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho_berma_izquierda" id="ancho_berma_izquierda" value="{{ isset($tramo->ancho_berma_izquierda) ? $tramo->ancho_berma_izquierda : ''}}" >
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho_berma_derecha" id="ancho_berma_derecha" value="{{ isset($tramo->ancho_berma_derecha) ? $tramo->ancho_berma_derecha : ''}}" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Identicacacion calzada</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="identificacion_calzada">
                        @if (isset($tramo->identificacion_calzada))
                            <option value="CD" {{ $tramo->identificacion_calzada == 'CD' ? 'selected' : '' }}>CD</option>
                            <option value="UC" {{ $tramo->identificacion_calzada == 'UC' ? 'selected' : '' }}>UC</option>
                        @else
                            <option value="CD">CD</option>
                            <option value="UC">UC</option>
                        @endif

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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="observaciones" id="observaciones" value="{{ isset($tramo->observaciones) ? $tramo->observaciones : ''}}" >
                    </div>
                </div>
            </div>

        </fieldset>
    </div>

    <hr class="hidden-md hidden-lg">
    <div class="col-md-4 col-lg-2">
        <div class="btn-toolbar">
            <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                <a href="{{ route('lista_tramos') }}" type="submit" style = "line-height:16px;font-size:15px;height:35px;background-color:#222222;" class="btn btn-block btn-dark btn-flat btn-sm">
                    <i class="glyphicon glyphicon-chevron-left"> </i>
                    Atras
                </a>
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
