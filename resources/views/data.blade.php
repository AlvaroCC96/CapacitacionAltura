<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Rut</th>
        <th>SAP</th>
        <th>Puntaje Obtenido</th>
        <th>Puntaje Total</th>
        <th>Fecha y hora</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datos as $row)
        <tr>
            <td>{{$row->id}} </td>
            <td>{{$row->nombre}} </td>
            <td>{{$row->rut}} </td>
            <td>{{$row->sap}} </td>
            <td>{{$row->puntaje_obtenido}} </td>
            <td>{{$row->puntaje_total_prueba}} </td>
            <td>{{$row->created_at}}</td>

        </tr>
    @endforeach
    </tbody>
</table>
