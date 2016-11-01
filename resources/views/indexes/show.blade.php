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
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection