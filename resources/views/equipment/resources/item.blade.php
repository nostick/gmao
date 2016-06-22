<!--Inventario de Equipos-->
<div id="items" class="tab-pane fade">
    <br>
    <table class="table table-hover table-striped">
        <thead class="header-table">
        <tr>
            <th>Descripción</th>
            <th>Tipo/Modelo</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Opciones </th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipment->item as $item)
            <tr>
                <th scope="row" width="320">{{$item->description}}</th>
                <td >{{$item->type.'/'.$item->model}}</td>
                <td>{{$item->brand}}</td>
                <td>{{$item->quantity}}</td>
                <td>
                    <a href="{{url('equipment/item/'.$item->id.'/edit')}}" type="button" class="btn btn-primary btn-sm"><span class="ion-edit"> Editar </span></a>
                    <a href="#" type="button" class="btn btn-danger btn-sm deleteitem"><span class="ion-trash-a"> Eliminar </span></a>
                </td>
            </tr>

            <div class="example-modal">
                <div id="modal_delete_item" class="modal modal-danger">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Eliminar</h4>
                            </div>
                            <div class="modal-body">
                                Desea eliminar el item de inventario?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                <button id="deletebutton1" type="button" class="btn btn-outline">Aceptar</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <form id="form_delete_item" method="POST" action="{{url('equipment/item/'.$item->id)}}">
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
            </div>
        @endforeach
        </tbody>
    </table>

    <a href="{{url('equipment/item/create')}}" type="button" class="btn btn-danger btn-lg"><span class="ion-ios-plus-outline"> Crear </span></a>
    <a href="{{url('equipment/item/excel/'.$equipment->id)}}" type="button" class="btn btn-danger btn-lg"><span class="ion-ios-printer"> Imprimir</span></a>
</div>
<!--Fin de Inventario de Equipos-->