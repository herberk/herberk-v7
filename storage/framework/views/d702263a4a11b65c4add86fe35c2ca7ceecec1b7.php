<?php $__env->startSection('title',"Lista de Empresas"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_empresas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo Form::model($socios, ['route' => ['socio/updatenota', $socios], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

           <?php echo $__env->make('empresas.socios.partials.NoteModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::close(); ?>

  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
$('#NoteModalLong').modal('show');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>