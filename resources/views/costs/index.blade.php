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
                        <h4 class="text-center">Coste de Ciclo de Vida</h4>
                        <br><br>
                        <p class="text-center">Para continuar por favor ingrese el siguiente valor:</p>
                        <br><br>
                        <form action="{{url('costs')}}" name="costForm" method="POST" class="text-center">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <label for="indicator">Número de unidades reemplazables en el periodo de estudio (10 años):</label>
                            <input type="text" placeholder="10" name="indicator" id="indicator" required>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="equipment">Equipo</label>
                                    <select name="equipment_id" id="equipment_id" class="form-control">
                                        <option value="">Equipo</option>
                                        @foreach($equipments as $equipment)
                                            <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label for="date1">Fecha inicial</label>
                                    <input class="form-control datepicker" size="16" type="text" value="" name="date1" id="date1" required>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                    <br>
                                </div>
                                <div class="col-lg-6">
                                    <label for="time1">Fecha final</label>
                                    <input class="form-control datepicker2" size="16" type="text" value="" name="time1" id="time1" required>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                    <br>
                                </div>
                            </div>

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

        $('.datepicker').datetimepicker({
            format: 'DD-MM-YYYY',

        });
        $('.datepicker2').datetimepicker({
            format: 'DD-MM-YYYY'
        });

        $(".datepicker").on("dp.change", function (e) {
            $('.datepicker2').data("DateTimePicker").minDate(e.date);
            $(this).attr('value', e.date.format('DD-MM-YYYY'));
        });
        $(".datepicker2").on("dp.change", function (e) {
            $('.datepicker').data("DateTimePicker").maxDate(e.date);
            $(this).attr('value', e.date.format('DD-MM-YYYY'));
        });
    </script>
@endsection