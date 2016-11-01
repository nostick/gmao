@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-lg-11 col-md-offset-2">
                <!-- Container (Services Section) -->
                <div class="container-fluid text-center">
                    <h2 class="color1">Indices de Mantenimiento</h2>
                    <h4 class="color1">Calculo y gestion de indices de mantenimiento</h4>
                    <br>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('indicators.calculate')}}" name="indexForm" id="indexForm" method="POST" class="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="col-sm-12">
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
                                <div class="col-lg-12">
                                <label for="optradio"><h4> Calcular indices por: </h4></label><br>
                                <label class="radio-inline"><input type="radio" name="optradio" id="type" value="system">Sistema</label>
                                <label class="radio-inline"><input type="radio" name="optradio" id="type2" value="sub_system">Sub-Sistema</label>
                                <label class="radio-inline"><input type="radio" name="optradio" id="type4" value="maintenanceCorrective">Mantenimiento Correctivo</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 systemTab">
                                    <label for="system"> Sistema </label>
                                    <select name="system_id" id="system_id" class="form-control">
                                        <option value="0">Seleccione Sistema</option>
                                    </select>
                                    <br><br>
                                </div>

                                <div class="col-lg-12 subsystemTab">
                                    <label for="sub_system"> Sub-Sistema </label>
                                    <select name="subsystem_id" id="subsystem_id" class="form-control">
                                        <option value="0">Seleccione Sub-Sistema</option>
                                    </select>
                                    <br><br>
                                </div>
                                <br>
                                <div class="col-lg-12 maintenanceTab">
                                    <label for="id_maintenance"> Mantenimiento </label>
                                    <select name="maintenance_id" id="maintenance_id" class="form-control">
                                        <option value="0">Seleccione Mantenimiento</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br><br>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="hidden" value="" name="selected-info" id="selected-info">
                                    <button type="submit" class="btn btn-lg btn-danger">Calcular</button>
                                </div>
                            </div>
                       </div>
                    </form>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection

@section('extrajs')
    @include('indexes.scripts.baseScripts')
    @if(isset($state))
    <script>
        $( document).ready( function(){
            //Alerts Message
            var state = '{{$state}}';
            switch (state){
                case 'corrective':
                    swal("Guardado!", "El registro de mantenimiento correctivo ha sido guardado", "success");
                    break;

                case 'preventive':
                    swal("Guardado!", "El registro de mantenimiento preventivo ha sido guardado", "success");
                    break;

                case 'ending':
                    swal("Guardado!", "Mantenimiento finalizado", "success");
                    break;

                case 'fault':
                    swal("Guardado!", "El registro de averia ha sido guardado", "success");
                    break;
            }

        });
    </script>
    @endif
@endsection
