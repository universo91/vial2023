<table>
    <thead >
        <tr>
            <th rowspan="2">Codigo Ruta</th>
            <th rowspan="2">Tramo</th>
            <th colspan="2">Tramo</th>
            <th colspan="6">Coord. UTM - WGS 84</th>
            <th rowspan="2">Tipo superficie</th>
            <th rowspan="2">Fecha</th>
        </tr>
        <tr>
            <th>Inicio (Km.)</th>
            <th>Fin (Km.)</th>
            <th>X Inicio (mts)</th>
            <th>Y Inicio (mts)</th>
            <th>Inicio (m.s.n.m)</th>
            <th>X Final (mts)</th>
            <th>Y Final (mts)</th>
            <th>Final (m.s.n.m)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collectRodaduras as  $supRodadura)
            <tr>
                <td>{{ $supRodadura->codigo }} </td>
                <td>{{ $supRodadura->numero_tramo }} </td>
                <td>{{ $supRodadura->progresiva_inicial }} </td>
                <td>{{ $supRodadura->progresiva_final }} </td>
                <td>{{ $supRodadura->coor_x_inicial }} </td>
                <td>{{ $supRodadura->coor_y_inicial }} </td>
                <td>{{ $supRodadura->altitud_inicial }} </td>
                <td>{{ $supRodadura->coor_x_final }} </td>
                <td>{{ $supRodadura->coor_y_final }} </td>
                <td>{{ $supRodadura->altitud_final }} </td>
                <td>{{ $supRodadura->tipo_superficie }} </td>
                <td>{{ $supRodadura->fecha }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
