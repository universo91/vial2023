<table>
    <thead>
        <tr>
            <th rowspan="2">Ruta</th>
            <th rowspan="2">Progresiva</th>
            <th colspan="3">Coord. en el centro del puente - WGS</th>
            <th rowspan="2">Clase</th>
            <th rowspan="2">Tipo</th>
            <th rowspan="2">Numero de Vias</th>
            <th rowspan="2">Tabllero de rodadura</th>
            <th rowspan="2">Longitud (m)</th>
            <th rowspan="2">Ancho calzada (m)</th>
            <th rowspan="2">Condicion funcional</th>
            <th rowspan="2">Hidrografia</th>
            <th rowspan="2">Fecha</th>
        </tr>
        <tr>
            <th>X</th>
            <th>Y</th>
            <th>Z (m.s.n.m)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collectPuente as  $puente)
            <tr>
                <td>{{ $puente->codigo }} </td>
                <td>{{ $puente->progresiva }} </td>
                <td>{{ $puente->coordenada_x }} </td>
                <td>{{ $puente->coordenada_y }} </td>
                <td>{{ $puente->altitud }} </td>
                <td>{{ $puente->clase }} </td>
                <td>{{ $puente->tipo }} </td>
                <td>{{ $puente->numero_vias }} </td>
                <td>{{ $puente->tablero_rodadura }} </td>
                <td>{{ $puente->longitud }} </td>
                <td>{{ $puente->ancho_calzada }} </td>
                <td>{{ $puente->condicion_funcional }} </td>
                <td>{{ $puente->hidrografia }} </td>
                <td>{{ $puente->created_at }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
