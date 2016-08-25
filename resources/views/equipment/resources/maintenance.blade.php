<!--Mantenimiento de Equipos-->


<div id="maintenance" class="tab-pane fade">
    <br>

    <div class="panel-group" id="accordion1list">
        @foreach($equipment->systems as $system)
        <div class="panel panel-danger" style="border-left: 4px solid #880000;">
            <div class="panel-heading">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1list" href="#collapse{{$system->id}}">
                        {{$system->name}}
                    </a></h4>
            </div>
            <div id="collapse{{$system->id}}" class="panel-collapse collapse">
                <div class="panel-body">

                    <!-- Here we insert another nested accordion -->
                    <?php $flag = true;?>
                    <div class="panel-group" id="accordion{{$system->id}}">
                        @foreach($system->subSystem as $detail)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion{{$system->id}}" href="#collapseInner{{$detail->id}}">
                                            {{$detail->name}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseInner{{$detail->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table table-hover table-striped">
                                            <thead class="header-table">
                                            <tr>
                                                <th>Actividad</th>
                                                <th>Descripción</th>
                                                <th>Frecuencia</th>
                                                <th>Opciones </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($detail->maintenances as $maintenance)
                                                <tr>
                                                    <th scope="row">{{$maintenance->activity}}</th>
                                                    <td width="450">{{$maintenance->description}}</td>
                                                    <td>{{$maintenance->frecuency}}</td>
                                                    <td>
                                                        <a href="{{url('equipment/maintenance/'.$maintenance->id.'/edit')}}" type="button" class="btn btn-primary btn-sm"><span class="ion-edit"> Editar </span></a>
                                                        <a href="#" type="button" class="btn btn-danger btn-sm deleteuser"><span class="ion-trash-a"> Eliminar </span></a>
                                                    </td>
                                                </tr>
                                                <div class="example-modal">
                                                    <div id="modal_delete" class="modal modal-danger">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                    <h4 class="modal-title">Eliminar</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Desea eliminar el mantenimiento?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                                                    <button id="deletebutton" type="button" class="btn btn-outline">Aceptar</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    <form id="form_delete" method="POST" action="{{url('equipment/maintenance/'.$maintenance->id)}}">
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    </form>
                                                </div>
                                            @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php $flag = false;?>
                        @endforeach

                        <?php $iterator = 0;?>
                        @if($iterator == 0 && $flag == true)
                                <table class="table table-hover table-striped">
                                    <thead class="header-table">
                                    <tr>
                                        <th>Actividad</th>
                                        <th>Descripción</th>
                                        <th>Frecuencia</th>
                                        <th>Opciones </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                        @endif
                        @foreach($system->maintenances as $maintenance)
                            @if($maintenance->sub_system_id == 0)
                                        <tr>
                                            <th scope="row">{{$maintenance->activity}}</th>
                                            <td width="450">{{$maintenance->description}}</td>
                                            <td>{{$maintenance->frecuency}}</td>
                                            <td>
                                                <a href="{{url('equipment/maintenance/'.$maintenance->id.'/edit')}}" type="button" class="btn btn-primary btn-sm"><span class="ion-edit"> Editar </span></a>
                                                <a href="#" type="button" class="btn btn-danger btn-sm deleteuser"><span class="ion-trash-a"> Eliminar </span></a>
                                            </td>
                                        </tr>
                                        <div class="example-modal">
                                            <div id="modal_delete" class="modal modal-danger">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title">Eliminar</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Desea eliminar el mantenimiento?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                                            <button id="deletebutton" type="button" class="btn btn-outline">Aceptar</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <form id="form_delete" method="POST" action="{{url('equipment/maintenance/'.$maintenance->id)}}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            </form>
                                        </div>
                            @endif
                        @endforeach
                        @if($iterator == 0)
                                    </tbody>
                                </table>
                            <?php $iterator++;?>
                        @endif
                    </div>
                    <!-- Inner accordion ends here -->

                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{url('equipment/maintenance/createBase',$equipment->id)}}" type="button" class="btn btn-danger btn-lg"><span class="ion-ios-plus-outline"> Crear </span></a>
    <a href="{{url('equipment/maintenance/excel',$equipment->id)}}" type="button" class="btn btn-danger btn-lg"><span class="ion-ios-printer"> Imprimir</span></a>

</div>
<!--Fin de Mantenimientos de Equipos-->