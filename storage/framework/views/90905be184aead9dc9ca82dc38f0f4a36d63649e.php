<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Herberk</title>
        
        <!-- Fonts -->
        
       <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <!-- Styles -->
        <style>
            #map {
                height: 650px;
                width: 100%;
            }
        </style>
        <style>
            header.masthead {
                position: relative;
                background-color: #343a40;
                background: url("../img/bg-masthead.jpg") no-repeat center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                padding-top: 12rem;
                padding-bottom: 16rem;
            }

            header.masthead .overlay {
                position: absolute;
                background-color: #212529;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                opacity: 0.3;
            }
        </style>
 </head>
  <body>
  <div id="app">
  
 <?php echo $__env->make('landing.navbar_welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section id="home" name="home"></section>
<?php echo $__env->make('landing.Section_home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <br>
  <br>
  <section id="desc" name="desc"></section>
  <br>
  <br>
  <br>
<?php echo $__env->make('landing.section_descrip', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section id="showcase" name="showcase"></section>
  <br>
  <br>
  <br>
<?php echo $__env->make('landing.Section_showcase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <br>
  <br>

 <section id="contact" name="contact"></section>
  <br>
  <?php echo $__env->make('landing.Section_contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('landing.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(asset('/js/app.js')); ?>"></script>

  <script>
      $('.carousel').carousel({
          interval: 2500
      })
  </script>
  </div>
    </body>
</html>
