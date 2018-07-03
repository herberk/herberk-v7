
     <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">
		     <tr>
		    <th>#</th>
            <th>Nombre corto</th>
		    <th style="width: 300px;">Nombre</th>
		    <th>Email</th>
             <th>Fecha</th>
             <th>Act.</th>
		     <th>Tipo</th>
              <th>#</th>
		  </tr>
           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr data-id="<?php echo e($user->id); ?>">
               <td><?php echo e($user->id); ?></td>
               <td><?php echo e($user->nickname); ?></td>
               <td><?php echo e($user->name); ?></td>
               <td><?php echo e($user->email); ?></td>
               <td><?php echo e(\Carbon\Carbon::parse($user->created_at)->format('d-m-y')); ?></td>
               <td><?php echo e(($user->active)?'Si':'No'); ?></td>
               <td><?php echo e($user->type); ?></td>
               <td class="text-center">
                 <a href="<?php echo e(route('users/delete', [$user->id])); ?>">
                      <i class="fas fa-trash fa-sm" style=color:Tomato></i></a>
               </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </table>
