<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">
        <img src="/img/drawing.png" width="40" height="33" class="d-inline-block align-top" alt="Herberk">  HerBerk</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Escritorio">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                    <i class="fas fa-desktop" style=color:Tomato></i>
                    <span class="nav-link-text">Escritorio</span>
                </a>
            </li>
            <?php $__env->startSection('sidebar'); ?>
               <?php echo $__env->make('layouts.Menus.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldSection(); ?>
        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
    <?php if(Auth::guest()): ?>
        <!-- Menus se ven si estar logeado -->
        <?php else: ?>
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link active" href="<?php echo e(url('/home')); ?>"> <i class="fas fa-desktop" style=color:Tomato></i> Escritorio</a>
                <a class="nav-item nav-link" href="<?php echo e(url('/tablas')); ?>"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Tablas</a>
                <a class="nav-item nav-link" href="<?php echo e(url('empresas')); ?>"><i class="fas fa-building" style=color:#e4c40a></i> Empresas</a>
                <a class="nav-item nav-link" href="<?php echo e(url('/usuario')); ?>"><i class="fas fa-user fa-fw" style=color:#15be0e></i> Usuario</a>
                <a class="nav-item nav-link disabled" href="#">Help</a>
            </div>
            <div>
                <a href="<?php echo e(route('files.index')); ?>" class="btn btn-outline-light btn-sm"><i class="fab fa-dropbox"></i></a>
                <a href="/tareas" class="btn btn-outline-primary btn-sm"><i class="fas fa-tasks"></i></a>
                <a href="#" class="btn btn-outline-danger btn-sm" id="toggleNavColor"><i class="fa fa-map-marker"></i></a>
            </div>
        <?php endif; ?>  &nbsp;
    </div>
    <?php if(auth()->guard()->guest()): ?>
        <a class="nav-item nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        <a class="nav-item nav-link" href="<?php echo e(route('register')); ?>">Registrarse</a>
    <?php else: ?>
        <div class="dropdown">
            <button class="btn btn-outline-success btn-sm nav-link"
                    type="button" data-toggle="modal" data-target="#exampleModal">
                <img src="<?php echo e(url('profile/avatar')); ?>" width="25" height="23" class="img-circle" alt="User Image"/>
                <?php echo e(Auth::user()->nickname); ?> <i class="fa fa-fw fa-sign-out-alt"></i>
            </button>
        </div>
    <?php endif; ?>

    <ul class="navbar-nav ml-auto">
    </ul>

</nav>
