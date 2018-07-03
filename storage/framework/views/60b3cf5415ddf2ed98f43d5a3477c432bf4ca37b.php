<div class="container">
    <div class="row">
        <div class="col-lg-12">
             <h1 class="text-center"><?php echo e(trans('message.whatnew')); ?></h1>
        </div>
        <div class="col-lg-6 centered">
            <img class="centered" src="<?php echo e(asset('/img/mobil.png')); ?>" alt="">
        </div>

        <div class="col-lg-6">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Descripción general
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Esta aplicación está hecha por un contador y pensada en solucionar problemas operativos de orden y mantención de las empresas  de clientes<br>
                            Convenciones:<br>
                            SII = Servicio de Impuestos  Internos<br>
                            CCCH = Colegio de Contadores de Chile <br>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Seccion Empresas
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            En esta parte se mantienen los datos de las distintas empresas que se desea controlar.
                            Se puede ingresar editar y eliminar entidades empresariales.<br>
                            Los datos son de diversa índole, se mantienen por secciones como:
                            Datos formales de escrituras públicas de constitución y modificaciones.<br>
                            Datos tributarios y del SII como declaraciones de renta, IVA y Declaraciones juradas.<br>
                            Informacion de Bancos, Socios, Contactos<br>
                            Datos contables financieros históricos


                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               Modulo Tablas
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Esta sección es para mantener la información necesaria y requerida por el usuario para la mantención de los datos que se solicitan en  los distintos procesos
                            Información como  localización ciudad comuna región,  Listado de Giros o actividades que dispone el SII
                            Codificación de tipos de documento solicitados por distintas instituciones, estos se encuentran clasificados por categorías de tipo


                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingcuatro">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsecuatro" aria-expanded="false" aria-controls="collapseThree">
                                Modulo Usuario
                            </button>
                        </h5>
                    </div>
                    <div id="collapsecuatro" class="collapse" aria-labelledby="headingcuatro" data-parent="#accordion">
                        <div class="card-body">
                            Capítulo destinado a la mantención de los usuarios del sistema.
                            Hay un listado de todos y la posibilidad de bloquear o eliminar
                            Se pueden cambiar los datos del usuario que ha iniciado una sesión.
                            Aquí es donde se le otorgan los permisos y atribuciones de las personas que usaran este sistema

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
