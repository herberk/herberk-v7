<?php $__env->startSection('title',"Lista de Regiones Comunas"); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="Display4 float-left"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Regiones y Comunas</div>
                    <?php if(Session::has('message')): ?>
                        <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <locaciones-master></locaciones-master>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>