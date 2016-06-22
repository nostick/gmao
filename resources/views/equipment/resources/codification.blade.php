<!--Codificacion de Equipos-->
<div id="codification" class="tab-pane fade">
    <br>
    <table class="table table-hover table-striped">
        <thead class="header-table">
        <tr>
            <th>Ubicación</th>
            <th>Área</th>
            <th>Equipo</th>
            <th>Cantidad</th>
            <th>CÓDIGO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$equipment->codification->ubication}}</th>
            <td>{{$equipment->codification->area}}</td>
            <td>{{$equipment->name}}</td>
            <td>{{$equipment->codification->quantity}}</td>
            <td>{{$equipment->codification->code}}</td>
        </tr>
        </tbody>
    </table>
</div>
<!--Fin de Codificacion de Equipos-->