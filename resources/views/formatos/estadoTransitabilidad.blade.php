<table>
    <thead>
        <tr>
            <th rowspan="2">Ruta</th>
            <th rowspan="2">Tramo</th>
            <th colspan="2">Tramo</th>
            <th colspan="3">Coord. Inicio-WGS 84</th>
            <th colspan="3">Coord. Final-WGS 84</th>
            <th rowspan="2">Estado de Conservacion</th>
            <th rowspan="2">Identificacion de calzada</th>
            <th rowspan="2">Fecha</th>
        </tr>
        <tr>
            <th>Inicio (Km.)</th>
            <th>Fin (Km.)</th>
            <th>X</th>
            <th>Y</th>
            <th>Z</th>
            <th>X</th>
            <th>Y</th>
            <th>Z</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collectEstadosTransitabilidad as  $estadoTransitabilidad)
            <tr>
                <td>{{ $estadoTransitabilidad->codigo }} </td>
                <td>{{ $estadoTransitabilidad->numero_tramo }} </td>
                <td>{{ $estadoTransitabilidad->progresiva_inicial }} </td>
                <td>{{ $estadoTransitabilidad->progresiva_final }} </td>
                <td>{{ $estadoTransitabilidad->coor_x_inicial }} </td>
                <td>{{ $estadoTransitabilidad->coor_y_inicial }} </td>
                <td>{{ $estadoTransitabilidad->altitud_inicial }} </td>
                <td>{{ $estadoTransitabilidad->coor_x_final }} </td>
                <td>{{ $estadoTransitabilidad->coor_y_final }} </td>
                <td>{{ $estadoTransitabilidad->altitud_final }} </td>
                <td>{{ $estadoTransitabilidad->estado_via }} </td>
                <td>{{ $estadoTransitabilidad->identificacion_calzada }} </td>
                <td>{{ $estadoTransitabilidad->fecha }} </td>
            </tr>
        @endforeach


    </tbody>
</table>
