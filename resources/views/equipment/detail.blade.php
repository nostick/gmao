@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-md-11 col-md-offset-1">
                <div class="row">
                    <div class="col-md-offset-5">
                        <h4>{{$equipment->name}}</h4>
                    </div>
                    <div class="col-md-offset-2">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#description">Descripción</a></li>
                            <li><a data-toggle="pill" href="#codification">Codificación</a></li>
                            <li><a data-toggle="pill" href="#maintenance">Mantenimiento Aplicado</a></li>
                            <li><a data-toggle="pill" href="#items">Inventario de Componentes</a></li>
                        </ul>
                    </div>
                    <div class="col-md-offset-2">
                        <div class="tab-content">

                            <!--Descripcion de Equipos-->
                            @include('equipment.resources.description')
                            <!--Fin de Descripcion de Equipos-->

                            <!--Codificacion de Equipos-->
                            @include('equipment.resources.codification')
                            <!--Fin de Codificacion de Equipos-->

                            <!--Mantenimiento de Equipos-->
                            @include('equipment.resources.maintenance')
                            <!--Fin de Mantenimientos de Equipos-->

                            <!--Inventario de Equipos-->
                            @include('equipment.resources.item')
                            <!--Fin de Inventario de Equipos-->
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>
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

            $(document).on('click', '.deleteitem', function () {
                $('#form_delete_item').attr('action', $(this).attr('rel'));
                $('#modal_delete_item').modal('show');
            });
            $('#deletebutton1').on('click', function () {
                $('#form_delete_item').submit();
            });
        })
    </script>
@endsection