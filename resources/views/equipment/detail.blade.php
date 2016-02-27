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
                            <li><a data-toggle="pill" href="#codification">Menu 1</a></li>
                            <li><a data-toggle="pill" href="#maintenance">Menu 2</a></li>
                            <li><a data-toggle="pill" href="#items">Menu 3</a></li>
                        </ul>
                    </div>
                    <div class="col-md-offset-2">
                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in active">
                                <h1> </h1>
                                <h4 style="line-height:30px; margin-left: 20px; margin-right: 40px;">
                                    {{$equipment->description}}
                                </h4>
                                <br><br>
                                <div class="col-lg-12">
                                    <div class="col-lg-6 col-lg-push-1">
                                        <img src="{{url('img/TUNEL IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{url('img/TUNEL IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div id="codification" class="tab-pane fade">
                                <h3>Menu 1</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div id="maintenance" class="tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="items" class="tab-pane fade">
                                <h3>Menu 3</h3>
                                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>
@endsection
