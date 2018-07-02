<div id="showcase">
    <div class="container">
        <div class="row">
           <div class="col-12">
            <h1 class="text-center">{{ trans('message.screenshots') }}</h1>
           </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/img/item-01.png') }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white bg-dark">Lista de Usuarios de la aplicacion.</h5>
                            <p class="font-weight-bold">Aqui se puede visualizar los artibutos de los usuarios</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/img/item-02.png') }}" alt="Secon slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white bg-dark">Editar Perfil de Usuarios .</h5>
                            <p class="font-weight-bold">Se puede cambiar los privilegios y permisos de los usuarios</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/img/item-03.png') }}" alt="Tri slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>