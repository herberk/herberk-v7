<style>
html {
margin: 0;
}
body {
font-family: "Times New Roman", serif;
margin: 35mm 8mm 2mm 8mm;
}
</style>
<h2>Empresa: <?php echo e($empresas->name); ?>&nbsp;&nbsp;&nbsp; RUT: <?php echo e($empresas->rut); ?></h2>
<dl>
<dt><u>Datos de la Empresas</u></dt>
    <dd>Nombre Corto:&nbsp; <?php echo e($empresas->name_corto); ?></dd>
    <dd>Actividad empresarial:&nbsp; <?php echo e($empresas->actividad); ?></dd>
    <dd>Ciudad:&nbsp;<?php echo e($empresas->ciudad); ?> &nbsp; Domicilio:&nbsp;&nbsp; <?php echo e($empresas->direccion); ?></dd>
<dt><u>Datos Servicio Impuestos Internos</u></dt>
    <dd>Fecha inicio Actividades:&nbsp; <?php echo e($empresas->fe_inicio); ?>&nbsp;&nbsp;Sistema Tributacion:&nbsp; <?php echo e($empresas->tipo_tri); ?></dd>
    <dd>Segmento:&nbsp; <?php echo e($empresas->segmento); ?>&nbsp;&nbsp;Giro SII:&nbsp; <?php echo e($empresas->giro); ?></dd>
<dt><u>Datos Cta. Cte. Bancarias</u></dt>
<dt><u>Datos Constitucion social</u></dt>
    <dd>Notario:&nbsp; <?php echo e($empresas->notario); ?>&nbsp;&nbsp;Fecha escrituta:&nbsp; <?php echo e($empresas->fe_notario); ?></dd>
    <dd>Repertorio:&nbsp; <?php echo e($empresas->repertorio); ?>&nbsp;&nbsp;Registro Comercio:&nbsp; <?php echo e($empresas->reg_comercio); ?>&nbsp;&nbsp;Fecha D.Oficial:&nbsp; <?php echo e($empresas->fe_diario); ?></dd>
<dt><u>Datos de Socios</u></dt>
<dt><u>Datos de los Contactos</u></dt>
    <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <dd>Nombre:&nbsp;<?php echo e($contacto->name); ?>&nbsp;Fono:&nbsp;<?php echo e($contacto->fono); ?>Email:&nbsp;<?php echo e($contacto->email); ?></dd>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</dl>
