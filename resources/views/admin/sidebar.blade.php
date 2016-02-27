@if(Auth::check())
    <div class="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

                <li>
                    <a href="{{url('/equipment')}}">Equipos</a>
                </li>
                <li>
                    <a href="#">Servicios de Contratacion</a>
                </li>
                <li>
                    <a href="#">Registro de mantenimiento de Equipos</a>
                </li>
                <li>
                    <a href="#">Indice de mantemiento</a>
                </li>
                <li>
                    <a href="#">Costo de Ciclo de Vida</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
@endif