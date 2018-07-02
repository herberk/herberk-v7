<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5 display-2"><strong> Her Berk</strong></h1>

                <div class="links h4">
                    <a href="#">Documentation</a> &nbsp;
                    <a href="#">Laracasts</a> &nbsp;
                    <a href="https://laravel-news.com">News</a> &nbsp;
                    <a href="https://Berkhoff.cl">Berkhoff</a> &nbsp;
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>
                    <h3>Completamente Reajustable</h3>
                    <p class="lead mb-0">Esta aplicacion se verá genial en cualquier dispositivo, ¡sin importar el tamaño!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>
                    <h3>Bootstrap 4 </h3>
                    <p class="lead mb-0">¡Con la última versión del nuevo framework Bootstrap 4!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Laravel y vue</h3>
                    <p class="lead mb-0">Desarrolado con un marco de trabajo de obtimo nivel!</p>
                </div>
            </div>
        </div>
    </div>
</section>
