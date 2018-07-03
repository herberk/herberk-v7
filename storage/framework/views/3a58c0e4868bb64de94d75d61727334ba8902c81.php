<?php $__env->startSection('title',"Login"); ?>
<?php $__env->startSection('content'); ?>
    <body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group has-danger<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                        <label class="sr-only" for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <label for="email">Correo Electronico </label>
                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                        <?php if($errors->has('email')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <label for="eassword">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        <?php if($errors->has('password')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Recordar Password</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Iniciar sesiòn </button>

                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="<?php echo e(route('register')); ?>">Formulario de Registro</a>
                    <a class="d-block small" href="<?php echo e(route('password.request')); ?>">Olvido Password?</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>