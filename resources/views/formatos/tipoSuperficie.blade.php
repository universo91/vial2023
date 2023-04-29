<table>
    <thead>
        <tr>
            <th rowspan="=2">Codigo de Ruta</th>

            <th colspan="2">Tramo</th>
            <th rowspan="2">Longitud (Km)</th>
            <th rowspan="2">Tipo de Superficie</th>
            <th rowspan="2">Fecha</th>
        </tr>
        <tr>
            <th>Desde</th>
            <th>Hasta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collectSuperficie as  $tipoSuperficie)
            <tr>
                <td>{{ $tipoSuperficie->codigo }} </td>
                <td>{{ $tipoSuperficie->progresiva_inicial }} </td>
                <td>{{ $tipoSuperficie->progresiva_final }} </td>
                <td>{{ $tipoSuperficie->longitud_km }} </td>
                <td>{{ $tipoSuperficie->tipo_superficie }} </td>
                <td>{{ $tipoSuperficie->fecha }} </td>
            </tr>
        @endforeach
    </tbody>
</tableid=>
