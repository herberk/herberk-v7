<?php echo Form::model(Request::all(),['route'=> 'giros', 'method'=>'GET','class' =>'navbar-form navbar-left ','role' =>'search']); ?>

<div class="form-control">
   <div class="row">
     &nbsp;&nbsp;  <a href="<?php echo e(url('/girosxls')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls</a>
    <div class="col-2">
    <?php echo Form::text('codigo',null, ['class'=>'form-control form-control-sm','placeholder'=>'Codigo del giro']); ?>

    </div>
        <div class="col-3">
    <?php echo Form::text('name',null, ['class'=>'form-control form-control-sm','placeholder'=>'Nombre del giro']); ?>

    </div>
     <div class="col-4">
    <?php echo Form::select('type',config('options.desgiros'),null, ['class'=>'form-control form-control-sm']); ?>

    </div>
       <button type="submit" class="btn btn-outline-success btn-sm"><i class="fas fa-search"></i> Buscar</button>
     </div>
</div>
<?php echo Form::close(); ?>