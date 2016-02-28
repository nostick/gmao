@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-lg-11 col-md-offset-2">
                <h4 class="text-center">Formulario para registro de mantenimiento</h4>
                <br>
                <form id="maintenanceForm" method="post" action="{{url('equipment/maintenance',$maintenance->id)}}" role="form">
                    <input name="_method" type="hidden" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="equipment">Equipo</label>
                        <select name="equipment_id" id="equipment_id">
                            @foreach($equipments as $equipment)
                                <option value="{{$equipment->id}}" @if($equipment->id==$maintenance->equipment_id)selected="selected" @endif>{{$equipment->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="activity">Actividad #</label>
                        <input type="text" class="form-control" id="activity" placeholder="ABC-1.0" name="activity" value="{{$maintenance->activity}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" placeholder="Descripción" name="description" value="{{$maintenance->description}}">
                    </div>
                    <div class="form-group">
                        <label for="frecuency">Frecuencia</label>
                        <select name="frecuency" id="frecuency">
                            <option value="" @if($maintenance->frecuency=="")selected="selected" @endif>Seleccione una frecuencia</option>
                            <option value="DIARIO" @if($maintenance->frecuency=="DIARIO")selected="selected" @endif>DIARIO</option>
                            <option value="SEMANAL" @if($maintenance->frecuency=="SEMANAL")selected="selected" @endif>SEMANAL</option>
                            <option value="QUINCENAL" @if($maintenance->frecuency=="QUINCENAL")selected="selected" @endif>QUINCENAL</option>
                            <option value="MENSUAL" @if($maintenance->frecuency=="MENSUAL")selected="selected" @endif>MENSUAL</option>
                            <option value="TRIMESTRAL" @if($maintenance->frecuency=="TRIMESTRAL")selected="selected" @endif>TRIMESTRAL</option>
                            <option value="SEMESTRAL" @if($maintenance->frecuency=="SEMESTRAL")selected="selected" @endif>SEMESTRAL</option>
                            <option value="ANUAL" @if($maintenance->frecuency=="ANUAL")selected="selected" @endif>ANUAL</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" aria-label="Left Align">
                        <span class="glyphicon glyphicon-plus" >Editar</span>
                    </button>

                </form>
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection

@section('extrajs')
    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--$("#equipment_id")--}}
                    {{--.change(function () {--}}
                        {{--var a = $("#equipment_id").val();--}}
                        {{--switch (a) {--}}
                            {{--case '1' :--}}
                                {{--$("#activity").val('TLA-');--}}
                                {{--break;--}}
                            {{--case '2' :--}}
                                {{--$("#activity").val('SAC-');--}}
                                {{--break;--}}
                            {{--case '3' :--}}
                                {{--$("#activity").val('MDD-');--}}
                                {{--break;--}}
                            {{--case '4' :--}}
                                {{--$("#activity").val('SHI-');--}}
                                {{--break;--}}
                            {{--case '5' :--}}
                                {{--$("#activity").val('PGR-');--}}
                                {{--break;--}}
                        {{--}--}}
                    {{--})--}}
                    {{--.trigger("change");--}}
        {{--})--}}
    {{--</script>--}}
@endsection
