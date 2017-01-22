@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
<div class="container" >
    <div class="row" id="page-content-wrapper">
        <div class="col-lg-11 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido {{Auth::user()->name}}</div>

                <div class="panel-body">
                    <h4 class="text-center">
                        Mantenimientos preventivos proximos a realizarse
                    </h4>
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($alarms as $key => $alarm)
                            <div class="col-lg-6">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        {{$alarm->reparation}}
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            Este mantenimiento tiene una frecuencia: {{$maintenances[$key]->frecuency}}
                                            <br><br>
                                            Su ultimo mantenimiento preventivo fue realizado hace: {{$diff[$key]}} dias
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection
