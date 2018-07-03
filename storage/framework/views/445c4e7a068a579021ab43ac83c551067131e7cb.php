<?php $__env->startSection('title',"Error"); ?>
<?php $__env->startSection('content'); ?>
    <h3 class="text-center">'Sorry '.<?php echo e(auth()->user()->name); ?> . '! Esta direccion no esxiste.';</h3>
    <?php echo $__env->make('layouts.logout_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>