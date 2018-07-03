<?php $__env->startSection('title',"Registro"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-sm-1">
      <div class="card-header"><i class="fas fa-user fa-fw" style=color:#15be0e></i> Formulario de Registroa</div>
      <div class="card-body">
        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
          <?php echo e(csrf_field()); ?>

          <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <div class="form-row">
              <div class="col-md-6">
                <label for="name">Nombre Completo</label>
                <input class="form-control" id="name" type="text"  placeholder="Ingrese Nombre Completo" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                <?php if($errors->has('name')): ?>
                  <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?>
            </div>
              <div class="col-md-6<?php echo e($errors->has('nickname') ? ' has-error' : ''); ?>">
                <label for="Nickname">Nombre corto</label>
                <input class="form-control" id="nickname" type="text"  placeholder="Nickname" name="nickname" value="<?php echo e(old('nickname')); ?>" required>
              <?php if($errors->has('nickname')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('nickname')); ?></span>
              <?php endif; ?>
              </div>
            </div>

          </div>
          <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="Email">Correo Email</label>
            <input class="form-control" id="email" type="email"  placeholder="Ingrese email" name="email" value="<?php echo e(old('email')); ?>" required>
            <?php if($errors->has('email')): ?>
              <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
          </div>
          <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Password">Password</label>
                <input class="form-control" id="password1" type="password" placeholder="Password"  name="password" required>
              </div>
              <div class="col-md-6">
                <label for="password-confirm">Confirmar password</label>
                <input class="form-control" id="password-confirm" type="password" placeholder="Confirm password" name="password_confirmation" required>
              </div>
              <?php if($errors->has('password')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('password')); ?></span>
              <?php endif; ?>
            </div>
          </div>
        <div class="form-group<?php echo e($errors->has('captcha') ? ' has-error' : ''); ?>">
          <div class="form-row">
            <label for="password" class="col-md-2 control-label">Captcha</label>
            <div class="col-md-4">
              <div class="captcha">
                <span><?php echo captcha_img(); ?></span>
                <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
              </div>
            </div>
             <div class="col-md-6">
                <input id="captcha" type="text" class="form-control" placeholder="Ingrese Captcha" name="captcha"  required>
                <?php if($errors->has('captcha')): ?>
                   <span class="form-text text-danger"><?php echo e($errors->first('captcha')); ?> </span>
                <?php endif; ?>
             </div>
           </div>
        </div>
            <button type="submit" class="btn btn-primary  btn-block">Registrarse </button>
       </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo e(route('login')); ?>">Login Page</a>
          <a class="d-block small" href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
    <script type="text/javascript">
        $(".btn-refresh").click(function(){
            $.ajax({
                type:'GET',
                url:'/refresh_captcha',
                success:function(data){
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>