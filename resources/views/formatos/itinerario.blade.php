<table style="font-size: 12px;" >
    <thead style="background-color:brown; color:white">
        <tr>
            
            <th>Codigo Ubigeo</th>
            <th>Codigo de Ruta</th>
            <th>Tramo</th>
            <th>Tipo terreno</th>
            <th>Estado via</th>
            <th>Tipo Superficie<sub>i</sub></th>
            <th>Ancho Plataforma</th>
            <th>Prog. Ini</th>            
            <th>X Inicial (WGS 84)</th>
            <th>Y Inicial (WGS 84)</th>
            <th>Altitud ini (msnm)</th>
            <th>Pro. Fin</th>
            <th>X Final ( WGS 84)</th>
            <th>Y Final (WGS 84)</th>
            <th>Altitud fin (msnm)</th>
            <th>Zona</th>
            <th>Punto notable</th>
            <th>Codigo foto</th>
            <th>Fecha</th>
            <th>Observaciones</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($collectItinerario as  $itinerario)
            <tr>
                <td>{{ $itinerario->ubigeo }} </td>
                <td>{{ $itinerario->ruta }} </td>
                <td>{{ $itinerario->numero_tramo }} </td>
                <td>{{ $itinerario->tipo_terreno }} </td>
                <td>{{ $itinerario->tipo_superficie }} </td>
                <td>{{ $itinerario->ancho_plataforma }} </td>
                <td>{{ $itinerario->estado_via }} </td>
                <td>{{ $itinerario->progresiva_inicial }} </td>
                <td>{{ $itinerario->coor_x_inicial }} </td>
                <td>{{ $itinerario->coor_y_inicial }} </td>
                <td>{{ $itinerario->altitud_inicial }} </td>
                <td>{{ $itinerario->progresiva_final }} </td>
                <td>{{ $itinerario->coor_x_final }} </td>
                <td>{{ $itinerario->coor_y_final }} </td>
                <td>{{ $itinerario->altitud_final }} </td>
                <td>{{ $itinerario->zona }} </td>                
                <td>{{ $itinerario->punto_notable }} </td>
                <td>{{ $itinerario->codigo_imagen }} </td>
                <td>{{ $itinerario->fecha }} </td>
                <td>{{ $itinerario->observaciones }} </td>

            </tr>
        @endforeach
    </tbody>
</table>