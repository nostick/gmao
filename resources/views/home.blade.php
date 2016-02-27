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
                    Esta es el Dashboard de GMAO
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection
