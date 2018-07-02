<?php $__env->startSection('title',"Lista de Socios"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_empresas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <body class="bg-dark">
    <div class="container">
        <?php if(Session::has('message')): ?>
            <div class="card  mx-auto mt-sm-0">
                <div class="alert alert-success" role="alert"> <i class="fas fa-building" style=color:#e4c40a></i><strong>  <?php echo e(Session::get('message')); ?></strong>
            </div>
        <?php elseif(Session::has('deleted')): ?>
            <div class="card  mx-auto mt-sm-0">
                <div class="alert alert-warning" role="alert"><i class="fas fa-building" style=color:#e4c40a></i><strong>
                        El Socio fue borrado, si desea deshacer el cambio <a href="<?php echo e(route('socio/restore', [Session::get('deleted')])); ?>">Click aqui</a></strong></div>
            </div>
        <?php else: ?>
           <div class="card  mx-auto mt-sm-0">
              <div class="card-header"> <i class="fas fa-building" style=color:#e4c40a></i><strong> Lista de Socios</strong>
           </div>
        <?php endif; ?>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-7">
                            <a href="<?php echo e(route('socioexcel')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
                            <a href="<?php echo e(url('socioscreate')); ?>" class="btn btn-sm  btn-outline-primary"><i class="fas fa-plus-square"></i> Nuevo Socio</a>
                        </div>
                        
                    </div>
                    <div class="table-responsive">
                        <?php echo $__env->make('empresas.socios.partials.tablesocio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        
                    </div>
                </div>
                <div class="card-footer small text-muted">Actualizado el: <?php echo e('date'); ?> 11:59 PM</div>
        </div>
     </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>