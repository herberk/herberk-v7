<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">
        <img src="/img/drawing.png" width="40" height="33" class="d-inline-block align-top" alt="Herberk">  HerBerk</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Escritorio">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="fas fa-desktop" style=color:Tomato></i>
                    <span class="nav-link-text">Escritorio</span>
                </a>
            </li>
            @section('sidebar')
               @include('layouts.Menus.sidebar')
            @show
        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
    @if (Auth::guest())
        <!-- Menus se ven si estar logeado -->
        @else
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link active" href="{{ url('/home') }}"> <i class="fas fa-desktop" style=color:Tomato></i> Escritorio</a>
                <a class="nav-item nav-link" href="{{ url('/tablas') }}"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Tablas</a>
                <a class="nav-item nav-link" href="{{ url('empresas') }}"><i class="fas fa-building" style=color:#e4c40a></i> Empresas</a>
                <a class="nav-item nav-link" href="{{ url('/usuario') }}"><i class="fas fa-user fa-fw" style=color:#15be0e></i> Usuario</a>
                <a class="nav-item nav-link disabled" href="#">Help</a>
            </div>
            <div>
                <a href="{{ route('files.index') }}" class="btn btn-outline-light btn-sm"><i class="fab fa-dropbox"></i></a>
                <a href="/tareas" class="btn btn-outline-primary btn-sm"><i class="fas fa-tasks"></i></a>
                <a href="#" class="btn btn-outline-danger btn-sm" id="toggleNavColor"><i class="fa fa-map-marker"></i></a>
            </div>
        @endif  &nbsp;
    </div>
    @guest
        <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
        <a class="nav-item nav-link" href="{{ route('register') }}">Registrarse</a>
    @else
        <div class="dropdown">
            <button class="btn btn-outline-success btn-sm nav-link"
                    type="button" data-toggle="modal" data-target="#exampleModal">
                <img src="{{ url('profile/avatar')  }}" width="25" height="23" class="img-circle" alt="User Image"/>
                {{ Auth::user()->nickname }} <i class="fa fa-fw fa-sign-out-alt"></i>
            </button>
        </div>
    @endguest

    <ul class="navbar-nav ml-auto">
    </ul>

</nav>
