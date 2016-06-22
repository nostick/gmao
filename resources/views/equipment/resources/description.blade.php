<!--Descripcion de Equipos-->
<div id="description" class="tab-pane fade in active">
    <h1> </h1>
    <h4 style="line-height:30px; margin-left: 20px; margin-right: 40px;">
        {{$equipment->description}}
    </h4>
    <br><br>

    <!-- Imagenes de Equipos -->
    @if ($equipment->id == '1')
        <div class="col-lg-12">
            <div class="col-lg-6 col-lg-push-1">
                <img src="{{url('img/TUNEL IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
            <div class="col-lg-6">
                <img src="{{url('img/TUNEL IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
        </div>
    @elseif($equipment->id == '2')
        <div class="col-lg-12">
            <div class="col-lg-6 col-lg-push-1">
                <img src="{{url('img/AIRE IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
            <div class="col-lg-6">
                <img src="{{url('img/AIRE IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
        </div>
    @elseif($equipment->id == '3')
        <div class="col-lg-12">
            <div class="col-lg-6 col-lg-push-1">
                <img src="{{url('img/DISPENSADORA IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
            <div class="col-lg-6">
                <img src="{{url('img/DISPENSADORA IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
        </div>
    @elseif($equipment->id == '4')
        <div class="col-lg-12">
            <div class="col-lg-6 col-lg-push-1">
                <img src="{{url('img/HIDRONEUMATICO IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
            <div class="col-lg-6">
                <img src="{{url('img/HIDRONEUMATICO IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
        </div>
    @elseif($equipment->id == '5')
        <div class="col-lg-12">
            <div class="col-lg-6 col-lg-push-1">
                <img src="{{url('img/PUENTEGRUA IMAGEN 1.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
            <div class="col-lg-6">
                <img src="{{url('img/PUENTEGRUA IMAGEN 2.jpg')}}" class="circulo1" height="260" alt="...">
            </div>
        </div>
@endif
<!-- Fin  de Equipos -->

</div>
<!--Fin de Descripcion de Equipos-->