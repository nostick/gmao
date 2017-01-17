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
                        <h4 class="text-center">Costo de Ciclo de Vida</h4>
                        <br><br>
                        <p class="text-center">Para continuar por favor ingrese el siguiente valor:</p>
                        <br><br>
                        <form action="{{url('costs')}}" name="costForm" method="POST" class="text-center">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <label for="indicator">Número de unidades reemplazables en el periodo de estudio (10 años):</label>
                            <input type="text" placeholder="10" name="indicator" id="indicator" required>
                            <button class="btn btn-primary">Continuar</button>
                        </form>
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
        <form id="form_delete" method="POST" action="#">
            <input name="_method" type="hidden" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>
@endsection

@section('extrajs')
    <script>

    </script>
@endsection