<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
   <?php echo $__env->make('layouts.Menus.Sidebar_empresas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <h1>Empresas</h1>
  <hr>
                <p>Aqui pretendo que se puedan generar todos los reportes a PDF Excel o pantalla que se relacionen con el modulo eMPRESAS.</p>


    <!-- Logout Modal-->
 <?php echo $__env->make('layouts.logout_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>