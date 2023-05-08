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
                        <input readonly maxlength="40" type="text" class=" form-control form-control-sm" name="id" id="id" value="{{ isset($ruta->id) ? $ruta->id : ''}}" >
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
                </div>
            </div>

            <div class="form-group">
                <hr hidden class="hidden-md hidden-lg">
                <div class="row">

                    <div class="col-lg-3 d-flex flex-row-reverse ">
                        <label for="codigo" class="control-label mr-4 text-dark font-weight-bold font-size-base" style="font-size: 15px;">Codigo<span class="text-danger"> *</span></label>
                    </div>
                    <div class="col-lg-9">
                        @if (isset($ruta->id))
                            <input maxlength="40" type="text" class=" form-control form-control-sm" name="codigo" id="codigo" value="{{ isset($ruta->codigo) ? $ruta->codigo : old('codigo') }}" required>
                        @endif
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="punto_inicio" id="punto_inicio" value="{{ isset($ruta->punto_inicio) ? $ruta->punto_inicio : old('punto_inicio') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x_inicio" id="coordenada_x_inicio" value="{{ isset($ruta->coordenada_x_inicio) ? $ruta->coordenada_x_inicio : old('coordenada_x_inicio') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y_inicio" id="coordenada_y_inicio" value="{{ isset($ruta->coordenada_y_inicio) ? $ruta->coordenada_y_inicio : old('coordenada_y_inicio') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_punto_inicial" id="altitud_inicial" value="{{ isset($ruta->altitud_punto_inicial) ? $ruta->altitud_punto_inicial : old('altitud_punto_inicial') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_punto_inicial" id="progresiva_inicial" value="{{ isset($ruta->progresiva_punto_inicial) ? $ruta->progresiva_punto_inicial : old('progresiva_punto_inicial') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="punto_final" id="pto_final_ruta" value="{{ isset($ruta->punto_final) ? $ruta->punto_final : old('punto_final') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_x_final" id="coord_final_x" value="{{ isset($ruta->coordenada_x_final) ? $ruta->coordenada_x_final : old('coordenada_x_final') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="coordenada_y_final" id="coord_final_y" value="{{ isset($ruta->coordenada_y_final) ? $ruta->coordenada_y_final : old('coordenada_y_final') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="altitud_punto_final" id="altitud_final" value="{{ isset($ruta->altitud_punto_final) ? $ruta->altitud_punto_final : old('altitud_punto_final') }}" required>
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
                        <input maxlength="40" type="text" class=" form-control form-control-sm" name="progresiva_punto_final" id="progresiva_final" value="{{ isset($ruta->progresiva_punto_final) ? $ruta->progresiva_punto_final : old('progresiva_punto_final') }}" required>
                    </div>
                </div>
            </div>

        </fieldset>
    </div>

    <hr class="hidden-md hidden-lg">
    <div class="col-md-4 col-lg-2">
        <div class="btn-toolbar">
            <div class="btn-group-vertical btn-group-lg" style="width: 100%;">
                <a href="{{ route('lista_rutas') }}" style = "line-height:16px;font-size:15px;height:35px;background-color:#222222;" class="btn btn-block btn-dark btn-flat btn-sm">
                    <i class="glyphicon glyphicon-chevron-left"> </i>
                    Atras
                </a>
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
