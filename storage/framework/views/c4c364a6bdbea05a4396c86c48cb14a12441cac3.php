<?php $__env->startSection('title',"Lista de Usuarios"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <body class="bg-dark">
    <div class="container">
        <div class="card  mx-auto mt-sm-1">
            <div class="card-header"><i class="fas fa-user fa-fw" style=color:#15be0e></i> Lista de usuarios
                <?php if(Session::has('message')): ?>
                    <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                <?php endif; ?>
                <?php if(Session::has('deleted')): ?>
                    <div class="alert alert-warning" role="alert"> Usuario borrada, si desea deshacer el cambio <a href="<?php echo e(route('users/restore', [Session::get('deleted')])); ?>">Click aqui</a> </div>
                <?php endif; ?>
                <?php if(Session::has('restored')): ?>
                    <div class="alert alert-success" role="alert"> Usuario restaurado</div>
                <?php endif; ?>
            </div>
              <div class="card-body">
                    <div class="row">
                         <div class="col-7">
                             <a href="<?php echo e(route('export')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
                             <a href="<?php echo e(url('/usernew')); ?>" class="btn btn-sm  btn-outline-primary"><i class="fas fa-plus-square"></i> Nuevo Usuario</a>
                         </div>
                          <?php echo $__env->make('admin.users.partials.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                  <div class="table-responsive">
                    <?php echo $__env->make('admin.users.partials.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $users->appends(Request::only(['name','type']))->setPath('')->render(); ?>

                  </div>
              </div>
            <div class="card-footer small text-muted">Actualizado el: <?php echo e('date'); ?> 11:59 PM</div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>