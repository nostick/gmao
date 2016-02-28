@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-md-11 col-md-offset-1">
                <div class="row">
                    <div class="col-md-offset-5">
                        <h4>{{$equipment->name}}</h4>
                    </div>
                    <div class="col-md-offset-2">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#description">Descripción</a></li>
                            <li><a data-toggle="pill" href="#codification">Codificación</a></li>
                            <li><a data-toggle="pill" href="#maintenance">Mantenimiento Aplicado</a></li>
                            <li><a data-toggle="pill" href="#items">Menu 3</a></li>
                        </ul>
                    </div>
                    <div class="col-md-offset-2">
                        <div class="tab-content">

                            <!--Descripcion de Equipos-->
                            <div id="description" class="tab-pane fade in active">
                                <h1> </h1>
                                <h4 style="line-height:30px; margin-left: 20px; margin-right: 40px;">
                                    {{$equipment->description}}
                                </h4>
                                <br><br>

                                <!-- Imagenes de Equipos -->
                                @if ($equipment->id == '1')
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 col-lg-push-1">
                                            <img src="{{url('img/TUNEL IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{url('img/TUNEL IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                    </div>
                                @elseif($equipment->id == '2')
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 col-lg-push-1">
                                            <img src="{{url('img/AIRE IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{url('img/AIRE IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                    </div>
                                @elseif($equipment->id == '3')
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 col-lg-push-1">
                                            <img src="{{url('img/DISPENSADORA IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{url('img/DISPENSADORA IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                    </div>
                                @elseif($equipment->id == '4')
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 col-lg-push-1">
                                            <img src="{{url('img/HIDRONEUMATICO IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{url('img/HIDRONEUMATICO IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                    </div>
                                @elseif($equipment->id == '5')
                                    <div class="col-lg-12">
                                        <div class="col-lg-6 col-lg-push-1">
                                            <img src="{{url('img/PUENTEGRUA IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="{{url('img/PUENTEGRUA IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
                                        </div>
                                    </div>
                                @endif
                                <!-- Fin  de Equipos -->

                            </div>
                            <!--Fin de Descripcion de Equipos-->

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

                            <!--Mantenimiento de Equipos-->
                            <div id="maintenance" class="tab-pane fade">
                                <br>
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
                                    @foreach($equipment->maintenance as $maintenance)
                                        <tr>
                                            <th scope="row">{{$maintenance->activity}}</th>
                                            <td width="520">{{$maintenance->description}}</td>
                                            <td>{{$maintenance->frecuency}}</td>
                                            <td>
                                                <a href="{{url('equipment/maintenance/'.$maintenance->id.'/edit')}}" type="button" class="btn btn-primary btn-sm">Editar</a>
                                                <a href="#" type="button" class="btn btn-danger btn-sm deleteuser">Eliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <a href="{{url('equipment/maintenance/create')}}" type="button" class="btn btn-danger btn-lg">Crear</a>
                                <a href="{{url('equipment/maintenance/'.$maintenance->id.'/edit')}}" type="button" class="btn btn-danger btn-lg">Imprimir</a>

                             </div>
                            <!--Fin de Mantenimientos de Equipos-->

                            <!--Inventario de Equipos-->
                            <div id="items" class="tab-pane fade">
                                <h3>Menu 3</h3>
                                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                            <!--Fin de Inventario de Equipos-->
                        </div>
                    </div>
                </div>

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
        </div>
    </div>

    <br><br><br><br><br><br><br><br>
@endsection

@section('extrajs')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.deleteuser', function () {
                $('#form_delete').attr('action', $(this).attr('rel'));
                $('#modal_delete').modal('show');
            });
            $('#deletebutton').on('click', function () {
                $('#form_delete').submit();
            });
        })
    </script>
@endsection