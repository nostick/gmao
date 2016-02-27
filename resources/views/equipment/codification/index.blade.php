@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-lg-11 col-md-offset-2">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="{{url('equipment',1)}}" class="nounderline">
                                <img src="{{url('img/TUNEL IMAGEN 1.jpg')}}" alt="..." class="circulo">
                                <div class="caption text-center">
                                    <h4>TUNEL DE LAVADO AUTOMÁTICO</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="{{url('equipment',2)}}" class="nounderline">
                                <img src="{{url('img/AIRE IMAGEN 2.jpg')}}" alt="..." class="circulo">
                            <div class="caption text-center">
                                <h4>SISTEMA DE AIRE COMPRIMIDO</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="{{url('equipment',3)}}" class="nounderline">
                                <img src="{{url('img/DISPENSADORA IMAGEN 1.jpg')}}" alt="..." class="circulo">
                            <div class="caption text-center">
                                <h4>MAQUINA DISPENSADORA DE DIESEL</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-push-2" >
                        <div class="thumbnail">
                            <a href="{{url('equipment',4)}}" class="nounderline">
                                <img src="{{url('img/HIDRONEUMATICO IMAGEN 2.jpg')}}" alt="..." class="circulo">
                            <div class="caption text-center">
                                <h4>SISTEMA HIDRONUEOMÁTICO </h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-push-2">
                        <div class="thumbnail">
                            <a href="{{url('equipment',5)}}" class="nounderline">
                                <img src="{{url('img/PUENTEGRUA IMAGEN 2.jpg')}}" alt="..." class="circulo">
                            <div class="caption text-center">
                                <h4>PUENTE GRÚA</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
