<table class="default" border="1">
    <thead style="background-color: green;">
        <tr>

            <th rowspan="2">Código de ubigeo</th>
            <th rowspan="2">Código Ruta</th>
            <th rowspan="2">Punto Inicio</th>

            <th  rowspan="2">Progresiva (Km.)</th>
            <th  colspan="4">Coordenadas UTM-DATUM: WGS 84</th>


            <th rowspan="2">Punto Final</th>
            <th rowspan="2">Progresiva (Km.)</th>
            <th colspan="4">Coordenadas - WGS 84 (Km.)</th>
            <th rowspan="2">Fecha registro</th>

          </tr>
          <tr>
            <th>ZONAS (17, 18, 19)</th>
            <th>X</th>
            <th>Y</th>
            <th>Z (Altura Barométrica)</th>
            <th>ZONAS (17, 18, 19)</th>
            <th>X</th>
            <th>Y</th>
            <th>Z (Altura Barométrica)</th>
          </tr>

    </thead>
    <tbody>
        @foreach ($collectReferenciamiento as  $referenciamiento)
            <tr>
                <td>{{ $referenciamiento->ubigeo }} </td>
                <td>{{ $referenciamiento->codigo }} </td>
                <td>{{ $referenciamiento->punto_inicio }} </td>
                <td>{{ $referenciamiento->progresiva_punto_inicial }} </td>
                <td>{{ $referenciamiento->zona }} </td>
                <td>{{ $referenciamiento->coordenada_x_inicio }} </td>
                <td>{{ $referenciamiento->coordenada_y_inicio }} </td>
                <td>{{ $referenciamiento->altitud_punto_inicial }} </td>
                <td>{{ $referenciamiento->punto_final }} </td>
                <td>{{ $referenciamiento->progresiva_punto_final }} </td>
                <td>{{ $referenciamiento->zona_final }} </td>
                <td>{{ $referenciamiento->coordenada_x_final }} </td>
                <td>{{ $referenciamiento->coordenada_y_final }} </td>
                <td>{{ $referenciamiento->altitud_punto_final }} </td>
                <td>{{ $referenciamiento->fecha }} </td>

            </tr>
        @endforeach
    </tbody>

</table>

