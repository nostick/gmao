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
                <h2 class="color1 text-center">Registro de Mantenimiento Correctivo</h2>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('register.corrective.store')}}" method="POST" id="correctiveReparation">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="form-group">
                        <div class="col-lg-12">
                         <label for="user">Responsable</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Usuario</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
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
                        <div class="col-lg-6">
                            <label for="date1">Fecha inicial del mantenimiento</label>
                                <input class="form-control datepicker" size="16" type="text" value="" name="date1" id="date1">
                                <span class="add-on"><i class="icon-th"></i></span>
                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="time1">Hora inicial del mantenimiento</label>
                            <input class="form-control timepicker" size="16" type="text" value="" name="time1" id="time1">
                            <span class="add-on"><i class="icon-th"></i></span>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                        <label for="system">Sistema</label>
                        <select name="system_id" id="system_id" disabled="disabled" class="form-control">
                                <option value="">Sistema</option>
                        </select>
                        </div>
                        <div class="col-lg-6">
                        <label for="subsystem">SubSistema</label>
                        <select name="subsystem_id" id="subsystem_id" disabled="disabled" class="form-control">
                            <option value="">SubSistema</option>
                        </select>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <br>
                            <label for="maintenance">Averia</label>
                            <select name="maintenance_id" id="maintenance_id" disabled="disabled" class="form-control">
                                <option value="">Averia</option>
                            </select>
                            <br><br>
                        </div>

                    </div>
                    <div class="col-lg-12">
                    <button type="submit" form="correctiveReparation" value="Registrar" class="btn btn-danger btn-lg"> Registrar <span class="ion-ios-plus-outline"></span></button>
                    </div>
                </form>

                <br>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection

@section('extrajs')
    @include('register.scripts.correctiveForm')
@endsection

