<?php $__env->startSection('title',"Lista de Contactos"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_empresas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <div class="Display6 float-left"><i class="fas fa-building" style=color:#e4c40a></i> Contactos</div>
                <?php if(Session::has('message')): ?>
                    <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                <?php endif; ?>
            </div>
        </div>
         <empresa-contacto></empresa-contacto>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>