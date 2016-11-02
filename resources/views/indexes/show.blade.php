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
                    @if(isset($data['preventive']))
                        @foreach($data['preventive'] as $index => $preventive)
                            <div class="panel panel-danger">
                                <!-- Default panel contents -->
                                <div class="panel-heading">{{$preventive->reparation}}</div>
                                <div class="panel-body text-left">
                                    <div class="col-lg-6">
                                        <label for="system" style="color: #9A0000">Sistema: </label>
                                        {{$preventive->system->name}}
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <label for="initial_date" style="color: #9A0000">Inicio: </label>
                                        {{$preventive->initial_date}}
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="sub_system" style="color: #9A0000">Sub Sistema: </label>
                                        {{$preventive->subSystem->name}}
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <label for="ending_date" style="color: #9A0000">Final: </label>
                                        {{$preventive->ending_date}}
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="maintenance" style="color: #9A0000">Mantenimiento: </label>
                                        {{$preventive->reparation}}
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <label for="type" style="color: #9A0000">Tipo de Mantenimiento: </label>
                                        Preventivo
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <label for="type" style="color: #9A0000">Frecuencia: </label>
                                        {{$data['maintenance'][0]->frecuency}}
                                    </div>
                                </div>

                                <!-- Table -->
                                <table class="table table-hover table-striped" id="finishTable" >
                                    <thead class="header-table">
                                    <tr>
                                        <th>TBF (Dias)</th>
                                        <th>TTR (Dias)</th>
                                        <th>HT (Horas)</th>
                                        <th>HMC (Horas)</th>
                                        <th>HMP (Horas)</th>
                                        <th>TO (Dias) </th>
                                        <th>TA (Dias)</th>
                                        <th>n</th>
                                        <th>MTBF</th>
                                        <th>Lamda</th>
                                        <th>MTTR</th>
                                        <th>Miu</th>
                                        <th>D</th>
                                        <th>FF</th>
                                        <th>FD</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$data['TBF']}}</td>
                                            <td>{{$data['TTR'][$index]}}</td>
                                            <td>{{$data['HT']}}</td>
                                            <td>{{$data['HMC']}}</td>
                                            <td>{{$data['HMP'][$index]}}</td>
                                            <td>{{$data['TO']}}</td>
                                            <td>{{$data['TA'][$index]}}</td>
                                            <td>{{$data['n']}}</td>
                                            <td>{{$data['MTBF']}}</td>
                                            <td>{{round($data['lamda'],2)}}</td>
                                            <td>{{$data['MTTR'][$index]}}</td>
                                            <td>{{$data['miu'][$index]}}</td>
                                            <td>{{round($data['D'][$index],2)}}</td>
                                            <td>{{round($data['FF'][$index],2)}}</td>
                                            <td>{{round($data['FD'][$index],2)}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        @endforeach
                    @elseif(isset($data['all']))
                        @foreach($data['all'] as $index => $repair)
                            <div class="panel panel-danger">
                                <!-- Default panel contents -->
                                @if(isset($repair->fault->fault))
                                    <div class="panel-heading">{{$repair->fault->fault}}</div>
                                @else
                                    <div class="panel-heading">{{$repair->reparation}}</div>
                                @endif
                                <div class="panel-body text-left">
                                    <div class="col-lg-6">
                                        <label for="system" style="color: #9A0000">Sistema: </label>
                                        {{$repair->system->name}}
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <label for="initial_date" style="color: #9A0000">Inicio: </label>
                                        {{$repair->initial_date}}
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="sub_system" style="color: #9A0000">Sub Sistema: </label>
                                        {{$repair->subSystem->name}}
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <label for="ending_date" style="color: #9A0000">Final: </label>
                                        {{$repair->ending_date}}
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="maintenance" style="color: #9A0000">Mantenimiento: </label>
                                        @if($data['type'][$index] == 'preventive')
                                            {{$repair->reparation}}
                                        @else
                                            {{$repair->fault->fault}}
                                        @endif
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <label for="type" style="color: #9A0000">Tipo de Mantenimiento: </label>
                                        @if($data['type'][$index] == 'preventive')
                                            Preventivo
                                        @else
                                            Correctivo
                                        @endif
                                    </div>

                                    <div class="col-lg-12 text-right">

                                        @if($data['type'][$index] == 'preventive')
                                            <label for="type" style="color: #9A0000">Frecuencia: </label>
                                            @foreach($data['maintenance'] as $maintenance)
                                                @if($repair->reparation == $maintenance->description)
                                                    {{$maintenance->frecuency}}
                                                @endif
                                            @endforeach
                                        @endif

                                    </div>
                                </div>

                                <!-- Table -->
                                <table class="table table-hover table-striped" id="finishTable" >
                                    <thead class="header-table">
                                    <tr>
                                        <th>TBF (Dias)</th>
                                        <th>TTR (Dias)</th>
                                        <th>HT (Horas)</th>
                                        <th>HMC (Horas)</th>
                                        <th>HMP (Horas)</th>
                                        <th>TO (Dias) </th>
                                        <th>TA (Dias)</th>
                                        <th>n</th>
                                        <th>MTBF</th>
                                        <th>Lamda</th>
                                        <th>MTTR</th>
                                        <th>Miu</th>
                                        <th>D</th>
                                        <th>FF</th>
                                        <th>FD</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$data['TBF'][$index]}}</td>
                                        <td>{{$data['TTR'][$index]}}</td>
                                        <td>{{$data['HT'][$index]}}</td>

                                            <td>{{$data['HMC'][$index]}}</td>


                                            <td>{{$data['HMP'][$index]}}</td>

                                        <td>{{$data['TO'][$index]}}</td>
                                        <td>{{$data['TA'][$index]}}</td>
                                        <td>{{$data['n']}}</td>
                                        <td>{{$data['MTBF'][$index]}}</td>
                                        <td>{{round($data['lamda'][$index],2)}}</td>
                                        <td>{{$data['MTTR'][$index]}}</td>
                                        <td>{{$data['miu'][$index]}}</td>
                                        <td>{{round($data['D'][$index],2)}}</td>
                                        <td>{{round($data['FF'][$index],2)}}</td>
                                        <td>{{round($data['FD'][$index],2)}}</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    @else
                        <h2>No se pueden calcular los indices de mantenimiento</h2>
                    @endif
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection