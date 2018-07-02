<?php $__env->startSection('title',"Lista de Empresas"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_empresas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="modal fade bd-example-modal-lg" id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NoteModalLongTitle">Empresa: <?php echo e($empresas->name); ?>&nbsp;&nbsp;&nbsp; RUT: <?php echo e($empresas->rut); ?></h5>

            </div>
            <div class="modal-body">
                <dt><u>Datos de la Empresas</u></dt>
                    <div class="form-row ">
                        <div class="col-sm-4">
                             <dd>&nbsp;  Nombre Corto:&nbsp;  <?php echo e($empresas->name_corto); ?> </dd>
                        </div>
                         <div class="col-sm-8">
                               <dd > Tipo de sociedad:&nbsp;  <?php echo e($empresas->tipo); ?> </dd>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-sm-12">
                            <dd > Actividad empresarial:&nbsp;  <?php echo e($empresas->actividad); ?> </dd>
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="col-sm-4">
                             <dd > Ciudad:&nbsp; <?php echo e($empresas->ciudad); ?>  </dd>
                        </div>
                        <div class="col-sm-8">
                             <dd > Domicilio:&nbsp;  <?php echo e($empresas->direccion); ?> </dd>
                        </div>
                    </div>
                <dt><u>Datos Servicio Impuestos Internos</u></dt>
                <div class="form-row ">
                    <div class="col-sm-4">
                         <dd >&nbsp;  Fecha inicio:&nbsp;  <?php echo e($empresas->fe_inicio); ?> </dd>
                    </div>
                    <div class="col-sm-4">
                         <dd > Tributacion:&nbsp;  <?php echo e($empresas->tipo_tri); ?> </dd>
                    </div>
                    <div class="col-sm-4">
                         <dd >Segmento:&nbsp;<?php echo e($empresas->segmento); ?> </dd>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="col-sm-12">
                         <dd > Giro:<?php echo e($empresas->codigo); ?>&nbsp;&nbsp;<?php echo e($empresas->giro); ?> </dd>
                    </div>
                </div>

                <dt><u>Datos Cta. Cte. Bancarias</u></dt>
                <dt><u>Datos Constitucion social</u></dt>

                <dt><u>Datos de Socios</u></dt>
                <div class="form-row ">
                    <div class="col-2"><u>Rut</u></div><div class="col-5"><u>Nombre Completo</u></div><div class="col-2"><u>Rep.Legal %</u></div>
                                    <div class="col-2"><u>APORTE TOTAL</u></div>
                </div>
                <?php $__currentLoopData = $socios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-row ">
                    <div class="col-2"><?php echo e($socio->rut); ?></div><div class="col-5"><?php echo e($socio->name); ?></div><div class="col-2"><?php echo e($socio->rep_legal); ?>&nbsp;&nbsp;<?php echo e($socio->porcen); ?></div>
                                    <div class="col-2"><?php echo e($socio->aporte); ?></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <dt><u>Datos de los Contactos</u></dt>
                <div class="form-row ">
                    <div class="col-5"><u>Nombre Completo</u></div><div class="col-2"><u>Fono</u></div> <div class="col-4"><u>Correo Electronico</u></div>
                  </div>
                    <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-row ">
                        <div class="col-5"><?php echo e($contacto->name); ?></div><div class="col-2"><?php echo e($contacto->fono); ?></div> <div class="col-5"><?php echo e($contacto->email); ?></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                 <dd><u>Datos de los Bancos</u> </dd>
            <div class="modal-footer">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-file-pdf"></i>   PDF
                    
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="<?php echo e(route('pdfview',[$empresas->id,$pd='1'])); ?>">Descargar <i class="fas fa-download"></i></a>
                        <a class="dropdown-item" href="<?php echo e(route('pdfview',[$empresas->id,$pd='2'])); ?>">Pantalla <i class="fas fa-desktop"></i></a>
                    </div>
                </div>

                <a href="<?php echo e(route('listempresa')); ?>"
                   class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Volver</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
$('#NoteModalLong').modal('show');
</script>--}}
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>