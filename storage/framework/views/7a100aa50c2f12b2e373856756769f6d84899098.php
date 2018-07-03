<?php $__env->startSection('title',"Lista de Giros"); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card  mx-auto mt-sm-1">
        <div class="card-header"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Giros o actividades
            <?php if(Session::has('message')): ?>
                <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
            <?php endif; ?>
        </div>
           <div class="panel-body">
               <?php echo $__env->make('tablas.partials.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               <?php echo $__env->make('tablas.partials.giros-tabla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               <?php echo $giros->appends(Request::only(['name','type']))->setPath('')->render(); ?>

          </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>