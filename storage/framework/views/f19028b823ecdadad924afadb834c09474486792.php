<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Usuarios">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUser" data-parent="#exampleAccordion">
        <i class="fas fa-user fa-fw" style=color:#15be0e></i><span class="nav-link-text">Usuarios</span></a>
    <ul class="sidenav-second-level collapse" id="collapseUser">
        <li> <a href="<?php echo e(url('/users')); ?>">Lista de usuarios</a></li>
        <li> <a href="<?php echo e(url('/usernew')); ?>">Nuevo usuario</a></li>
        <li><a href="<?php echo e(url('passchange')); ?>">Cambio de clave</a></li>
        <li><a href="<?php echo e(url('/profile')); ?>">Editar Perfil</a></li>
    </ul>
</li>
