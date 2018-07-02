<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Empresas">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseEmpresa" data-parent="#exampleAccordion">
        <i class="fas fa-building" style=color:#e4c40a></i> <span class="nav-link-text">Empresas</span></a>
    <ul class="sidenav-second-level collapse" id="collapseEmpresa">

        <li><a href="{{ url('/listempresa') }}">Lista de empresas</a></li>
        <li> <a href="{{ url('/creatempresa') }}">Nueva empresa</a></li>
        <li><a href="{{ url('/listasocios') }}">Socios</a></li>
        <li><a href="{{ url('/contactos') }}">Contactos</a></li>
        <li><a href="{{ url('/ciudades') }}">Declaraciones Juradas</a></li>
        <li> <a href="{{ url('/creatempresa') }}">Nueva empresa</a></li>
    </ul>
</li>