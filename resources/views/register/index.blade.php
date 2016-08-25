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
                <h2 class="color1">Servicios</h2>
                <h4 class="color1">Registro y gestion de mantenimientos preventivo y correctivo</h4>
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

                @if(isset($message))
                    <div class="alert alert-success">
                        {{$message}}
                    </div>
                @endif
                <div class="row color1">
                    <div class="col-sm-6">
                        <a href="{{route('register.corrective')}}">
                            <span class="glyphicon glyphicon-cog logo"></span>
                            <h3 class="title">Mantenimiento Correctivo</h3>
                            <p class="text-maintenance">Registro de actividad de mantenimiento correctivo</p>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#">
                            <span class="glyphicon glyphicon-check logo"></span>
                            <h3>Finalizar Mantenimiento</h3>
                            <p>Finalizar actividad de mantenimiento correctivo o preventivo</p>
                        </a>
                    </div>
                </div>
                <br><br>
                <div class="row color1">
                    <div class="col-sm-6">
                        <a href="#">
                            <span class="glyphicon glyphicon-wrench logo"></span>
                            <h3>Mantenimiento Preventivo</h3>
                            <p>Registro de actividad de mantenimiento preventivo</p>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#">
                            <span class="glyphicon glyphicon-pushpin logo"></span>
                            <h3>Averia</h3>
                            <p>Registro de averia en algun equipo</p>
                        </a>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection
