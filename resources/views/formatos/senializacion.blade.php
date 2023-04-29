<table>
    <thead>
        <tr>
            <th>Departamento</th>
            <th>Provincia</th>
            <th>Ubigeo</th>
            <th>Ruta</th>
            <th>Señal</th>
            <th>Clasificacion</th>
            <th>Progresiva</th>
            <th>Lado</th>
            <th>Soporte</th>
            <th>Material</th>
            <th>Zona</th>
            <th>X</th>
            <th>Y</th>
            <th>Z</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collectSenializacion as  $senializacion)
            <tr>
                <td>{{ $senializacion->departamento }} </td>
                <td>{{ $senializacion->provincia }} </td>
                <td>{{ $senializacion->ubigeo }} </td>
                <td>{{ $senializacion->codigo }} </td>
                <td>{{ $senializacion->senial }} </td>
                <td>{{ $senializacion->clasificacion }} </td>
                <td>{{ $senializacion->progresiva }} </td>
                <td>{{ $senializacion->lado }} </td>
                <td>{{ $senializacion->soporte }} </td>
                <td>{{ $senializacion->material }} </td>
                <td>{{ $senializacion->zona }} </td>
                <td>{{ $senializacion->coordenada_x }} </td>
                <td>{{ $senializacion->coordenada_y }} </td>
                <td>{{ $senializacion->altitud }} </td>
                <td>{{ $senializacion->fecha }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
