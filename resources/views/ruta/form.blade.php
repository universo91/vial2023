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
                    @if(isset($ruta->id))
                        <input readonly maxlength="40" type="text" class=" form-control form-control-sm" name="id" id="id" value="{{ isset($ruta->id) ? $ruta->id : ''}}" >
                    @endif
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
                    <select class=" form-control form-control-sm select2bs4 col-lg-9"  name="distritos_id" id="distrito">
                        <option value="">Seleccione distrito</option>
                        @if (isset($ruta->distritos_id))
                            @foreach ($distritos as $dist)
                                <option value='{{ $dist->id }}' {{ $dist->id == $ruta->distritos_id ? 'selected' : ''}}> {{ strtoupper( $dist->nombre ) }} </option>
                            @endforeach
                        @endif
                    </select>
                    @error('distritos_id')
                        <small class="invalid-feedback" role="alert">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">

                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="codigo" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Codigo<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">

                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="codigo" id="codigo" value="{{ isset($ruta->codigo) ? $ruta->codigo : old('codigo') }}" >
                        @error('codigo')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                            @if( isset($ruta->codigo_imagen) )
                                <div id="vista_previa" class="col-lg-12">
                                    <p>Nombre de archivo: {{ substr( strrchr($ruta->codigo_imagen,"/"),1) }}</p>
                                    <img src="{{ $ruta->codigo_imagen }}" alt="imagen">
                                </div>
                            @else
                                <div id="vista_previa" class="col-lg-12">No hay imagen seleccionada para cargar</div>
                            @endif
                            @error('codigo_imagen')
                                <small class="invalid-feedback" role="alert">{{ $message }}</small>
                            @enderror
                        </div>

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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="punto_inicio" id="punto_inicio" value="{{ isset($ruta->punto_inicio) ? $ruta->punto_inicio : old('punto_inicio') }}" >
                        @error('punto_inicio')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x_inicio" id="coordenada_x_inicio" value="{{ isset($ruta->coordenada_x_inicio) ? $ruta->coordenada_x_inicio : old('coordenada_x_inicio') }}" >
                        @error('coordenada_x_inicio')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y_inicio" id="coordenada_y_inicio" value="{{ isset($ruta->coordenada_y_inicio) ? $ruta->coordenada_y_inicio : old('coordenada_y_inicio') }}" >
                        @error('coordenada_y_inicio')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_punto_inicial" id="altitud_inicial" value="{{ isset($ruta->altitud_punto_inicial) ? $ruta->altitud_punto_inicial : old('altitud_punto_inicial') }}" >
                        @error('altitud_punto_inicial')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_punto_inicial" id="progresiva_inicial" value="{{ isset($ruta->progresiva_punto_inicial) ? $ruta->progresiva_punto_inicial : old('progresiva_punto_inicial') }}" >
                        @error('progresiva_punto_inicial')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="punto_final" id="pto_final_ruta" value="{{ isset($ruta->punto_final) ? $ruta->punto_final : old('punto_final') }}" >
                        @error('punto_final')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x_final" id="coord_final_x" value="{{ isset($ruta->coordenada_x_final) ? $ruta->coordenada_x_final : old('coordenada_x_final') }}" >
                        @error('coordenada_x_final')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y_final" id="coord_final_y" value="{{ isset($ruta->coordenada_y_final) ? $ruta->coordenada_y_final : old('coordenada_y_final') }}" >
                        @error('coordenada_y_final')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_punto_final" id="altitud_final" value="{{ isset($ruta->altitud_punto_final) ? $ruta->altitud_punto_final : old('altitud_punto_final') }}" >
                        @error('altitud_punto_final')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_punto_final" id="progresiva_final" value="{{ isset($ruta->progresiva_punto_final) ? $ruta->progresiva_punto_final : old('progresiva_punto_final') }}" >
                        @error('progresiva_punto_final')
                            <small class="invalid-feedback" role="alert">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>

        </fieldset>
    </div>

    <hr class="hidden-md hidden-lg">
    <div class="col-md-4 col-lg-2">
        <div class="btn-toolbar">
            <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                <a href="{{ route('lista_rutas') }}"
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
