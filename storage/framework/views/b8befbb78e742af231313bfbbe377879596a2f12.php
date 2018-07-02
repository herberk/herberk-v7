


<!-- Primera Linea -->
<div class="form-row ">
    <div class="col-2"></div>
    <div class="col-3 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('rut') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Rut</div>
            </div>
            <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                            placeholder="Sin: .  - " value="<?php echo e(old('rut',$empresas->rut)); ?>">
            <?php if($errors->has('rut')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('rut')); ?></span>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-sm-7">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Nombre</div>
            </div>
            <input type="text" class="form-control" placeholder="Nombre completo o razon social"
                            name="name" value="<?php echo e(old('name',$empresas->name)); ?>" required>
           </div>
        <?php if($errors->has('name')): ?>
            <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
        <?php endif; ?>
    </div>
</div>
<!-- Segunda Linea -->
<div class="form-row ">
    <div class="col-2"></div>

    <div class="col-sm-3 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('name_corto') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Nombre corto</div>
            </div>
            <input id="name_corto" type="text" class="form-control" name="name_corto" placeholder="Max. 10 Carac."
                   value="<?php echo e(old('name_corto',$empresas->name_corto)); ?>" required>
            <?php if($errors->has('name_corto')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('name_corto')); ?></span>
            <?php endif; ?>
        </div>
     </div>
    <div class="col-7 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Tipo empresa</div>
            </div>
            <?php echo Form::select('arti_id', $art[5], null, ['class' => 'form-control']); ?>

        </div>
    </div>
</div>
<!-- Tercera Linea -->
<div class="form-row ">
    <div class="col-2"></div>
     <div class="col-10 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Actividad empresarial</div>
            </div>
            <input id="actividad" type="text" class="form-control" name="actividad" placeholder="Descripcion corta segun la escritura"
                   value="<?php echo e(old('actividad',$empresas->actividad)); ?>" >
        </div>
    </div>
</div>

<!-- cuarta Linea -->
<div class="form-row ">
    <div class="col-3 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('caital') ? ' has-error' : ''); ?>">
                <div class="input-group-text">Capital $</div>
            </div>
            <input id="capital" type="text" class="form-control text-right"
                   name="capital" value="<?php echo e(old('capital',$empresas->capital)); ?>">
        </div>
        <?php if($errors->has('capital')): ?>
            <span class="form-text text-danger"><?php echo e($errors->first('capital')); ?></span>
        <?php endif; ?>
    </div>
    <div class="col-2 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('codpostal') ? ' has-error' : ''); ?>">
                <div class="input-group-text"><a href="http://www.correos.cl/SitePages/home.aspx" target="_blank">Zip</a></div>
            </div>
            <input id="codpostal" type="text" class="form-control text-right"
                   name="codpostal" value="<?php echo e(old('codpostal',$empresas->codpostal)); ?>">
            <?php if($errors->has('codpostal')): ?>
                <span class="form-text text-danger"><?php echo e($errors->first('codpostal')); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-6 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <div class="input-group-text">@</div>
            </div>
            <input id="email" type="email" class="form-control" placeholder="Correo electronica"
                    name="email" value="<?php echo e(old('email',$empresas->email)); ?>" required>

                  <?php if($errors->has('email')): ?>
                    <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
                 <?php endif; ?>

        </div>
    </div>
</div>
<!-- quinta Linea -->
<div class="form-row ">
    <div class="col-4">
        <?php echo Field::select('region_id', $reg_com, null); ?>

    </div>
    <div class="col-4">
       <?php echo Field::select('comuna_id',$com_com, null); ?>

    </div>
    <div class="col-4">
        <?php echo Field::select('ciudad_id',$ciu_com, null); ?>

    </div>
</div>

<!-- sexta Linea -->
<div class="form-row ">
    <div class="col-6">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Domicilio</div>
            </div>
            <input id="direccion" type="text" class="form-control" name="direccion" value="<?php echo e(old('direccion',$empresas->direccion)); ?>" >
        </div>
    </div>
    <div class="col-4">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Fonos</div>
            </div>
            <input id="fono" type="text" class="form-control" name="fono" value="
            <?php echo e(old('fono',isset($empresas->fono) ? $empresas->fono : null)); ?>" >
        </div>
    </div>

</div>


<div class="form-row ">
        <div class="col-sm-9">
            <?php echo Field::text('giro', ['class' => 'easy-autocomplete','label'=>'Actividad o Giro SII']); ?>

        </div>
        <div class="col-sm-3">
            <?php echo Field::text('codigo',['id' => 'codigo','label'=>'Codigo Giro SII','readonly']); ?>

        </div>

 </div>

<div id="accordion">
    <div class="card">
            <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <strong> Datos del SII</strong>
            </a>
         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
             <!-- Primera Linea del acordeon one-->
             <div class="form-row ">
                 <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Inicio SII&nbsp;<i class="far fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" class="form-control datepicker" name="fe_inicio" value="<?php echo e(old('fe_inicio',$empresas->fe_inicio)); ?>">
                        </div>
                    </div>
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tributacion</div>
                        </div>
                        <?php echo Form::select('tipo_tri',config('options.tipo_tri'),null, ['class'=>'form-control']); ?>


                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Segmento SII&nbsp; <a href= "biblio/sii/segmento.pdf" target="_blank"><i class="fas fa-info-circle"></i></a></div>
                        </div>
                        <?php echo Form::select('segmento',config('options.segmento'),null, ['class'=>'form-control']); ?>

                    </div>
                </div>
                 <div class="col-2 my-0">
                     <div class="input-group mb-1">
                         <div class="input-group-prepend">
                             <div class="input-group-text"><a href= "biblio/sii/segmento.pdf" target="_blank"><i class="fas fa-info-circle"></a></i>DISPONIBLE</div>
                         </div>
                     </div>
                 </div>
            </div> 
             <!-- Segunda Linea del acordeon one-->
            <div class="form-row">
                
             </div>  
         </div>  

        <div class="card">
            <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                <strong> Informacion sobre constitucion social</strong>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <!-- Primera Linea del acordeon Two-->
               <div class="form-row">
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Notario</div>
                                <input id="notario" type="text" class="form-control" name="notario" value="<?php echo e(old('notario',$empresas->notario)); ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Escritora &nbsp;<i class="far fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" class="form-control datepicker" name="fe_notario" value="<?php echo e(old('fe_notario',$empresas->fe_notario)); ?>">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Repertorio</div>
                                <input id="repertorio" type="text" class="form-control" name="repertorio" value="<?php echo e(old('repertorio',$empresas->repertorio)); ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Diario Of.&nbsp;<i class="far fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" class="form-control datepicker" name="fe_diario" value="<?php echo e(old('fe_diario',$empresas->fe_diario)); ?>">
                        </div>
                    </div>
                </div>
                <!-- segunda Linea del acordeon Two-->
                <div class="form-row">
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Reg. Comercioo</div>
                                <input id="reg_comercio" type="text" class="form-control" name="reg_comercio" value="<?php echo e(old('reg_comercio',$empresas->reg_comercio)); ?>" >
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="card">
            <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                <strong> Informacion sobre Bancos</strong>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <!-- Primera Linea del acordeon Two-->
                <div class="form-row">
                    <div class="col-sm-12">
                        <table class="table table-sm table-bordered table-striped" id="Table" name=Table" width="100%" style="font-size: 12px">
                            <thead>
                            <tr>
                                <th>Nombre del Banco</th>
                                <th>Cuenta Corriente</th>
                                <th>Apoderados Firma</th>
                                <th>Linea Credito</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name=namebco[] style="width: 100%"></td>
                                    <td><input name=ctacte[] style="width: 100%"></td>
                                    <td><input name=firman[] style="width: 100%"></td>
                                    <td><input name=montolinea[] style="width: 100%"></td>
                                    <td class="borrar"><i class="fas fa-trash fa-sm" style=color:Tomato></i></td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- segunda Linea del acordeon Two-->
                   <div class="form-row">
                           <div class="container">
                           <div class="row">
                               <div class="col-sm">

                               </div>
                               <div class="col-sm">
                                   <button onclick="additem(event)" class="btn btn-success btn-sm btn-block"><i class="fa fa-save"></i> Agrega otra linea</button>
                                   <br>
                               </div>
                               <div class="col-sm">

                               </div>
                           </div>
                       </div>
                   </div>
            </div> 
        </div>

    </div>
 </div>
