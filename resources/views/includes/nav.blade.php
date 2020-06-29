<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ setActive('index') }}" href="{{Route('index')}}">
                    <span data-feather="home"></span>
                    Inicio <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('mesero.index') }}" href="{{route('mesero.index')}}">
                    <span data-feather="users"></span>
                    Meseros
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('checador.index') }}" href="{{route('checador.index')}}">
                    <span data-feather="clock"></span>
                    Checador
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('mesa.index') }}" href="{{route('mesa.index')}}">
                    <span data-feather="monitor"></span>
                    Mesas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('asignacion.index') }}" href="{{route('asignacion.index')}}">
                    <span data-feather="clipboard"></span>
                    Asignar Mesa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('reporte.index') }}" href="{{route('reporte.index')}}">
                    <span data-feather="check-square"></span>
                    Reportes
                </a>
            </li>
        </ul>
    </div>
</nav>
