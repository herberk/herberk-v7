<div class="form-row ">
    <div class="col-3">
        <select  class="custom-select" name="empresa_id" >
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value=<?php echo e($empresa->id); ?>> <?php echo e($empresa->name_corto); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-sm-3">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('rut') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Rut</div>
            </div>
            <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                   placeholder="Sin: .  - " value="<?php echo e(old('rut',$socios->rut)); ?>">
            <?php if($errors->has('rut')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('rut')); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Nombre</div>
            </div>
            <input type="text" class="form-control" placeholder="Nombre completo del socio"
                   name="name" value="<?php echo e(old('name',$socios->name)); ?>" required>
        </div>
        <?php if($errors->has('name')): ?>
            <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
        <?php endif; ?>
    </div>
</div>
<div class="form-row ">
       <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <div class="input-group-text">@</div>
            </div>
            <input id="email" type="email" class="form-control" placeholder="Correo electronica"
                   name="email" value="<?php echo e(old('email',$socios->email)); ?>" required>
            <?php if($errors->has('email')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Fonos</div>
            </div>
            <input id="fono" type="text" class="form-control" name="fono" value="
                     <?php echo e(old('fono',isset($socios->fono) ? $socios->fono : null)); ?>" >
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-2">
      <div class="input-group">
        <div class="input-group-prepend<?php echo e($errors->has('rep_legal') ? ' has-error' : ''); ?>">
            <div class="input-group-text">Rep.</div>
        </div>
            <select class="custom-select" id="rep_legal" name="rep_legal">
                <option>SI</option>
                <option>No</option>
            </select>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="input-group">
            <div class="input-group-prepend<?php echo e($errors->has('apopago') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Pago $</div>
            </div>
            <input id="apopago" type="text" onchange="sumar();" class="form-control text-right"
                   name="apopago" value="<?php echo e(old('apopago',$socios->apopago)); ?>">
        </div>
        <?php if($errors->has('apopago')): ?>
            <span class="form-text text-danger"><?php echo e($errors->first('apopago')); ?></span>
        <?php endif; ?>
    </div>
    <div class="col-sm-4">
        <div class="input-group">
            <div class="input-group-prepend<?php echo e($errors->has('apopend') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Peniente $</div>
            </div>
            <input id="apopend" type="text" onchange="sumar();" class="form-control text-right"
                   name="apopend" value="<?php echo e(old('apopend',$socios->apopend)); ?>">
             </div>
             <?php if($errors->has('apopend')): ?>
                 <span class="form-text text-danger"><?php echo e($errors->first('apopend')); ?></span>
             <?php endif; ?>
    </div>
    <div class="col-sm-2">
        <div class="input-group">
            <div class="input-group-prepend<?php echo e($errors->has('porcen') ? ' has-error' : ''); ?>">
                <div class="input-group-text">%.</div>
            </div>
            <input id="porcen" type="text" class="form-control text-right"
                   name="porcen" value="<?php echo e(old('porcen',$socios->porcen)); ?>">
        </div>
        <?php if($errors->has('porcen')): ?>
            <span class="form-text text-danger"><?php echo e($errors->first('porcen')); ?></span>
        <?php endif; ?>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-3">
        <div class="input-group">
            <div class="input-group-text">Total $ </div>
            <input id="aporte" type="text" class="form-control text-right"
                   name="aporte" value="<?php echo e(old('aporte',$socios->aporte)); ?>">
        </div>

    </div>
</div>
