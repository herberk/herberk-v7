

<table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">
   <tr>
       <th>#</th>
       <th style="width: 100px;">RUT</th>
       <th style="width: 300px;">Nombre</th>
       <th>Empresa</th>
       <th style="width: 40px;">Rep.</th>
       <th style= "width: 30px;">%</th>
       <th style= "width: 90px; text-align: center">Pagado</th>
       <th style= "width: 90px; text-align: center">Pendiente</th>
       <th style= "width: 90px; text-align: center" >Aporte</th>
       <th style= "width: 30px;">Notas</th>
       <th style= "width: 30px;">Editar</th>
       <th style= "width: 30px;">Eliminar</th>
  </tr>
    <?php $__currentLoopData = $socios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr data-id="<?php echo e($socio->id); ?>">
       <td><?php echo e($socio->id); ?></td>
       <td><?php echo e($socio->rut); ?></td>
       <td><?php echo e($socio->name); ?></td>
       <td><?php echo e($socio->empresas->name_corto); ?></td>
       <td><?php echo e($socio->rep_legal); ?></td>
       <td><?php echo e($socio->porcen); ?></td>
       <td style="text-align: right"><?php echo e($socio->apopago); ?></td>
       <td style="text-align: right"><?php echo e($socio->apopend); ?></td>
       <td style="text-align: right"><?php echo e($socio->aporte); ?></td>
       <td class="text-center"> <a href="<?php echo e(route('socioshownotas', [$socio->id])); ?>">
               <i class="fas fa-tasks" style=color:#3729fa></i></a></td>
       <td class="text-center"> <a href="<?php echo e(route('socioedit',$socio)); ?>">
              <i class="fas fa-pencil-alt" style=color:#15be0e></i> </a></td>
      <td class="text-center"> <a href="<?php echo e(route('socio/delete', [$socio->id])); ?>">
              <i class="fas fa-trash fa-sm" style=color:Tomato></i></a></td>
     </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
