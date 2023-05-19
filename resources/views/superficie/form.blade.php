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
                        <label  name="id" id="id" "> {{ isset($superficie->id) ? $superficie->id : '' }} </label>
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
                        @if (isset($superficie->id))
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
                        @if (isset($superficie->id))
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
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="rutas_id" id="ruta" >
                        <option value="">Seleccione ruta</option>
                        @if (isset($superficie->id))
                            @foreach ($rutas as $ru)
                                <option value='{{ $ru->id }}' {{ $ru->id == $tramo->rutas_id ? 'selected' : ''}} > {{ $ru->codigo }}</option>
                            @endforeach
                        @endif
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
                        @if (isset($superficie->id))
                            @foreach ($tramos as $tra)
                                <option value="{{ $tra->id }}" {{ $tra->id == $superficie->tramos_id ? 'selected' : '' }}>{{ $tra->numero_tramo }}</option>
                            @endforeach

                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">estado</label>
                    </div>
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="estado" id="estado">
                            <option>Seleccione estado </option>
                        @if (isset($superficie->id))
                            <option value="malo" {{ $superficie->estado == 'malo' ? 'selected' : ''}}>Malo</option>
                            <option value="regular" {{ $superficie->estado == 'regular' ? 'selected' : ''}}>Regular</option>
                            <option value="bueno" {{ $superficie->estado == 'bueno' ? 'selected' : ''}}>Bueno</option>
                        @else
                            <option value="malo">Malo</option>
                            <option value="regular">Regular</option>
                            <option value="bueno">Bueno</option>
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
                            <option>Seleccione Tipo superficie</option>
                        @if (isset($superficie->id))
                            <option value="pavimento asfaltico" {{ $superficie->tipo_superficie == 'pavimento asfaltico' ? 'selected' : ''}}>Pavimento asfaltico</option>
                            <option value="pavimento de concreto" {{ $superficie->tipo_superficie == 'pavimento de concreto' ? 'selected' : ''}}>Pavimento de concreto</option>
                            <option value="afirmado" {{ $superficie->tipo_superficie == 'afirmado' ? 'selected' : ''}}>Afirmado</option>
                            <option value="sin afirmar" {{ $superficie->tipo_superficie == 'sin afirmar' ? 'selected' : ''}}>Sin afirmar</option>
                            <option value="trocha carrozable" {{ $superficie->tipo_superficie == 'trocha carrozable' ? 'selected' : ''}}>Trocha carrozable</option>
                        @else
                            <option value="pavimento asfaltico">Pavimento asfaltico</option>
                            <option value="pavimento de concreto">Pavimento de concreto</option>
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
                        <label for="ancho" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Ancho<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="ancho" id="ancho" value="{{ isset($superficie->ancho) ? $superficie->ancho : '' }} " required>
                    </div>
                </div>
            </div>

             <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-row-reverse">
                        <label for="codigo_imagen" class="control-label mr-4 text-dark font-weight-bold font-size-base " style="font-size: 15px;">Imagen<span class="text-danger"> *</span></label>
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
                            @if( isset($superficie->codigo_imagen) )
                                <div id="vista_previa" class="col-lg-12">
                                    <p>Nombre de archivo: {{ substr( strrchr($superficie->codigo_imagen,"/"),1) }}</p>
                                    <img src="{{ $superficie->codigo_imagen }}" alt="imagen">
                                </div>
                            @else
                                <div id="vista_previa" class="col-lg-12">No hay imagen seleccionada para cargar</div>
                            @endif
                        </div>

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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_inicial" id="progresiva_inicial" value="{{ isset($superficie->progresiva_inicial) ? $superficie->progresiva_inicial : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_inicial_x" id="coor_inicial_x" value="{{ isset($superficie->coor_inicial_x) ? $superficie->coor_inicial_x : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_inicial_y" id="coor_inicial_y" value="{{ isset($superficie->coor_inicial_y) ? $superficie->coor_inicial_y : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_inicial" id="altitud_inicial" value="{{ isset($superficie->altitud_inicial) ? $superficie->altitud_inicial : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_final" id="progresiva_final" value="{{ isset($superficie->progresiva_final) ? $superficie->progresiva_final : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_final_x" id="coor_final_x" value="{{ isset($superficie->coor_final_x) ? $superficie->coor_final_x : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coor_final_y" id="coor_final_y" value="{{ isset($superficie->coor_final_y) ? $superficie->coor_final_y : '' }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_final" id="altitud_final" value="{{ isset($superficie->altitud_final) ? $superficie->altitud_final : '' }}" required>
                    </div>
                </div>
            </div>

        </fieldset>
    </div>

    <hr class="hidden-md hidden-lg">
    <div class="col-md-4 col-lg-2">
        <div class="btn-toolbar">
            <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                <a
                    href=" {{ route('lista_superficies') }}"
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
                <button type="submit"
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
