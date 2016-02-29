@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-md-11 col-md-offset-2">
                 <div class="row">
                    <div id="contract" class="">
                        <h4 class="text-center">Contratación de Servicios de Mantenimientos</h4>
                        <table class="table table-hover table-striped">
                            <thead class="header-table">
                            <tr>
                                <th>Equipo</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Localización</th>
                                <th>Cantidad</th>
                                <th>Mantenimiento</th>
                                <th>Observaciones</th>
                                <th>Opciones </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contracts as $contract)
                                <tr>
                                    <th scope="row">{{$contract->equipment->name}}</th>
                                    <td>{{$contract->description}}</td>
                                    <td>{{$contract->type}}</td>
                                    <td>{{$contract->brand}}</td>
                                    <td>{{$contract->location}}</td>
                                    <td>{{$contract->quantity}}</td>
                                    <td>{{$contract->maintenance}}</td>
                                    <td>{{$contract->observation}}</td>
                                    <td width="160">
                                        <a href="{{url('contract_services/'.$contract->id.'/edit')}}" type="button" class="btn btn-primary btn-sm"><span class="ion-edit"> Editar </span></a>
                                        <a href="#" type="button" class="btn btn-danger btn-sm deleteuser"><span class="ion-trash-a"> Eliminar </span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <a href="{{url('contract_services/create')}}" type="button" class="btn btn-danger btn-lg"><span class="ion-ios-plus-outline"> Crear </span></a>
                        <a href="{{url('contract_services/excel',$contract->equipment->id)}}" type="button" class="btn btn-danger btn-lg"><span class="ion-ios-printer"> Imprimir</span></a>

                    </div>
                 </div>
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
                        Desea eliminar el contrato de mantenimiento?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                        <button id="deletebutton" type="button" class="btn btn-outline">Aceptar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <form id="form_delete" method="POST" action="{{url('contract_services/'.$contract->id)}}">
            <input name="_method" type="hidden" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>
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