<table class="table table-sm table-bordered table-striped" width="100%" style="font-size: 12px">
    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th class="text-center">Afecto</th>
        <th class="text-center">Cat.</th>

    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $giros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e($giro->id); ?></td>
            <td class="text-center"><?php echo e($giro->codigo); ?></td>
            <td><?php echo e($giro->name); ?></td>
            <td class="text-center"><?php echo e($giro->afecto); ?></td>
            <td class="text-center"><?php echo e($giro->cat_tribut); ?></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
