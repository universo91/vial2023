<table>
    <thead>
        <tr>
            <th rowspan="2">Ruta</th>
            <th rowspan="2">Tramo</th>
            <th colspan="2">Tramo</th>
            <th colspan="3">Coord. Inicio-WGS 84</th>
            <th colspan="3">Coord. Final-WGS 84</th>
            <th rowspan="2">Numero de carriles</th>
            <th rowspan="2">Ancho de calzada</th>
            <th rowspan="2">Ancho de berma Izq.</th>
            <th rowspan="2">Ancho de berma Der.</th>
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
        @foreach ($collectPlataforma as  $plataforma)
            <tr>
                <td>{{ $plataforma->codigo }} </td>
                <td>{{ $plataforma->numero_tramo }} </td>
                <td>{{ $plataforma->progresiva_inicial }} </td>
                <td>{{ $plataforma->progresiva_final }} </td>
                <td>{{ $plataforma->coor_x_inicial }} </td>
                <td>{{ $plataforma->coor_y_inicial }} </td>
                <td>{{ $plataforma->altitud_inicial }} </td>
                <td>{{ $plataforma->coor_x_final }} </td>
                <td>{{ $plataforma->coor_y_final }} </td>
                <td>{{ $plataforma->altitud_final }} </td>
                <td>{{ $plataforma->numero_carriles }} </td>
                <td>{{ $plataforma->ancho_calzada }} </td>
                <td>{{ $plataforma->ancho_berma_izquierda }} </td>
                <td>{{ $plataforma->ancho_berma_derecha }} </td>
                <td>{{ $plataforma->fecha }} </td>
            </tr>
        @endforeach


    </tbody>
</table>
