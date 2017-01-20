@if(Auth::check())
    <div class="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

                <li>
                    <a href="{{url('/equipment')}}">Equipos</a>
                </li>
                <li>
                    <a href="{{url('/contract_services')}}">Servicios de Contratacion</a>
                </li>
                <li>
                    <a href="{{url('register_maintenances')}}">Registro de mantenimiento de Equipos</a>
                </li>
                <li>
                    <a href="{{url('indicators')}}">Indice de mantemiento</a>
                </li>
                <li>
                    <a href="{{url('costs')}}">Coste de Ciclo de Vida</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
@endif