<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">
        <img src="/img/drawing.png" width="40" height="32" class="d-inline-block align-top" alt="Herberk">  HerBerk</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        @if (Auth::guest())
        <!-- Menus se ven si estar logeado -->
            <a href="#" class="btn btn-outline-primary btn-sm">M</a>
            &nbsp;<a class="btn btn-outline-primary btn-sm" href="#home" class="smoothScroll">&nbsp;{{ trans('message.home') }}&nbsp;&nbsp;</a>
            &nbsp;<a class="btn btn-outline-primary btn-sm" href="#desc" class="smoothScroll">&nbsp;{{ trans('message.description') }}&nbsp;</a>
            &nbsp;<a class="btn btn-outline-primary btn-sm" href="#showcase" class="smoothScroll">&nbsp;{{ trans('message.showcase') }}&nbsp;</a>
            &nbsp;<a class="btn btn-outline-primary btn-sm"  href="#contact" class="smoothScroll">&nbsp;{{ trans('message.contact') }}&nbsp;</a>
        @else
            {{--No se ve pues hay que estar logeado--}}

        @endif  &nbsp;
    </div>
    @guest
        <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
        <a class="nav-item nav-link" href="{{ route('register') }}">Registrarse</a>
    @else
        <a href="/home" class="btn btn-outline-success" id="toggleNavColor"><i class="fas fa-sign-in-alt"></i></a>
        <div class="dropdown">
            <button class="btn btn-outline-success btn-sm nav-link"
                    type="button" data-toggle="modal" data-target="#exampleModal">
                {{ Auth::user()->name }} <i class="fa fa-fw fa-sign-out"></i>
            </button>
        </div>
    @endguest
</nav>