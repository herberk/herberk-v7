<?php $__env->startSection('title',"DropBox"); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-12">

            <div class="card card">
                <div class="card-header">Archivos en Dropbox</div>
                <div class="card-body">
                 <table class="table table-sm table-bordered" width="100%" style="font-size: 12px">
         
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tamaño</th>
                            <th>Extensión</th>
                            <th style="width: 120px;">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($file->id); ?></td>
                                <td><?php echo e($file->name); ?></td>
                                <td><?php echo e($file->sizeInKb); ?> KB</td>
                                <td><?php echo e($file->extension); ?></td>
                                <td>
                                    <a href="<?php echo e($file->public_url); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="<?php echo e(route('files.download', $file)); ?>" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i></a>
                                    <form action="<?php echo e(route('files.destroy', $file)); ?>" method="POST" class="d-inline-block">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-light btn-sm"><i class="fas fa-trash" style=color:Tomato></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Subir nuevo archivo</div>
                <div class="card-body">
                    <form action="<?php echo e(route('files.store')); ?>" class="form-inline" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="file" name="file" class="form-control mr-4" required>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>  Subir Archivo</button>
                    </form>
                </div>
            </div>
        </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>