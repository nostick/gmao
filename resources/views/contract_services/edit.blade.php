@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-lg-11 col-md-offset-2">
                <h4 class="text-center">Formulario para registro de Contratación de Servicio</h4>
                <br>
                <form id="maintenanceForm" method="post" action="{{url('contract_services',$contract->id)}}" role="form">
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
                                <option value="{{$equipment->id}}" @if($equipment->id == $contract->equipment->id)selected="selected"@endif>{{$equipment->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" placeholder="Descripción" name="description" value="{{$contract->description}}">
                    </div>
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <input type="text" class="form-control" id="type" placeholder="Tipo" name="type" value="{{$contract->type}}">
                    </div>
                    <div class="form-group">
                        <label for="brand">Marca</label>
                        <input type="text" class="form-control" id="brand" placeholder="Marca" name="brand" value="{{$contract->brand}}">
                    </div>
                    <div class="form-group">
                        <label for="location">Localización</label>
                        <input type="text" class="form-control" id="location" placeholder="Localización" name="location" value="{{$contract->location}}">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad</label>
                        <input type="text" class="form-control" id="quantity" placeholder="1" name="quantity" value="{{$contract->quantity}}">
                    </div>
                    <div class="form-group">
                        <label for="maintenance">Mantenimiento</label>
                        <input type="text" class="form-control" id="maintenance" placeholder="Mantenimiento" name="maintenance" value="{{$contract->maintenance}}">
                    </div>
                    <div class="form-group">
                        <label for="observation">Observación</label>
                        <input type="text" class="form-control" id="observation" placeholder="Observación" name="observation" value="{{$contract->observation}}">
                    </div>
                    <button type="submit" class="btn btn-primary" aria-label="Left Align">
                        <span class="ion-edit" >  Editar</span>
                    </button>
                    <a href="{{ URL::previous() }}" type="button" class="btn btn-danger">
                        <span class="ion-ios-undo" >  Cancelar</span>
                    </a>

                </form>
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection
