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
                         <label for="user">Responsable</label>
                        <select name="user_id" id="user_id">
                            <option value="">Usuario</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="equipment">Equipo</label>
                        <select name="equipment_id" id="equipment_id">
                            <option value="">Equipo</option>
                            @foreach($equipments as $equipment)
                                <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="date1">Fecha inicial del mantenimiento</label>
                                <input class="form-control datepicker" size="16" type="text" value="" name="date1" id="date1">
                                <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <div class="col-lg-6">
                            <label for="date2">Fecha final del mantenimiento</label>
                                <input class="form-control datepicker2" size="16" type="text" value="" name="date2" id="date2">
                                <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <br><br><br>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="time1">Hora inicial del mantenimiento</label>
                            <input class="form-control timepicker" size="16" type="text" value="" name="time1" id="time1">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <div class="col-lg-6">
                            <label for="time2">Hora final del mantenimiento</label>
                            <input class="form-control timepicker2" size="16" type="text" value="" name="time2" id="time2">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                        <label for="system">Sistema</label>
                        <select name="system_id" id="system_id" disabled="disabled">
                                <option value="">Sistema</option>
                        </select>
                        </div>
                        <div class="col-lg-6">
                        <label for="subsystem">SubSistema</label>
                        <select name="subsystem_id" id="subsystem_id" disabled="disabled">
                            <option value="">SubSistema</option>
                        </select>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="maintenance">Mantenimiento</label>
                            <select name="maintenance_id" id="maintenance_id" disabled="disabled">
                                <option value="">Mantenimiento</option>
                            </select>
                        </div>
                        <br><br><br>
                    </div>
                    <button type="submit" form="correctiveReparation" value="Registrar" class="btn btn-danger btn-lg"> Registrar <span class="ion-ios-plus-outline"></span></button>
                </form>

                <br>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection

@section('extrajs')
    @include('register.scripts.form')
@endsection

