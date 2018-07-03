<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">
        <img src="/img/drawing.png" width="40" height="32" class="d-inline-block align-top" alt="Herberk">  HerBerk</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        

    <?php if(Auth::guest()): ?>
     <!-- Menus se ven si estar logeado -->
     <?php else: ?>

     <?php endif; ?>  &nbsp;

    </div>
    <?php if(auth()->guard()->guest()): ?>
        <a class="nav-item nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        <a class="nav-item nav-link" href="<?php echo e(route('register')); ?>">Registrarse</a>
    <?php else: ?>
     <a href="#" class="btn btn-outline-primary btn-sm">F</a>
        <a href="#" class="btn btn-outline-primary btn-sm">M</a>
    <div class="dropdown">


            <button class="btn btn-outline-success btn-sm nav-link"
                    type="button" data-toggle="modal" data-target="#exampleModal">
                <?php echo e(Auth::user()->name); ?> <i class="fa fa-fw fa-sign-out"></i>
            </button>
     </div>
    <?php endif; ?>
    <ul class="navbar-nav ml-auto">
    </ul>
</nav>
