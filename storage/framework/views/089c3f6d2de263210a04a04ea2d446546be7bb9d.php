<?php $__env->startSection('title',"Notas "); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <tasks-list></tasks-list>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
  <style>
    .active, .myLi:hover {
      background-color: #505050;
        border: none;
        outline: none;
      /*color: rgb(251, 251, 251);  color de los botones*/
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script>
      // Add active class to the current UL (highlight it)
      var header = document.getElementById("myUl");
      var myLi = header.getElementsByClassName("myLi");
      for (var i = 0; i < miLis.length; i++) {
          miLi[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
          });
      }
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>