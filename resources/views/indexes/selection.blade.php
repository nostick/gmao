@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-lg-11 col-md-offset-2">
                <!-- Container (Services Section) -->
                <div class="container-fluid">
                    <h2 class="color1 text-center">Calcular indices de mantenimiento</h2>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row color1">
                        <br>
                        <div class="col-sm-6 text-center" id="preventive">
                            <a href="{{route('indicators.preventive')}}">
                                <span class="glyphicon glyphicon-wrench logo"></span>
                                <h3>Mantenimiento Preventivo</h3>
                            </a>
                        </div>

                        <div class="col-sm-6 text-center" id="corrective">
                            <a href="{{route('indicators.corrective')}}">
                                <span class="glyphicon glyphicon-cog logo"></span>
                                <h3 class="title">Mantenimiento Correctivo</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>

@endsection

@section('extrajs')

@endsection

