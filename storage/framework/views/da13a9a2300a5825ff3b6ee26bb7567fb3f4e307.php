<?php $__env->startSection('title',"Editar perfil"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card  mx-auto mt-sm-1">
        <div class="card-header"><i class="fas fa-user fa-fw" style=color:#15be0e></i>  Editar Perfil usuario</div>
             <div class="card-body">
                  <form class="form-horizontal"
                                  role="form"
                                  method="POST"
                                  action="<?php echo e(url('profile')); ?>"
                                  enctype="multipart/form-data">
                               <?php echo e(method_field('PUT')); ?>

                                <?php echo e(csrf_field()); ?>


                   <!--Avatar -->




          <div class="form-group<?php echo e($errors->has('avatar') ? ' has-error' : ''); ?>">
               <div class="form-row">
                   <div class="col-md-6">
                       <div class="form-row">
                          <div class="col-md-3">
                                <?php if($profile->avatar): ?>

                                   <a href="#">

                                   <img src="<?php echo e(url('profile/avatar')); ?>"alt="Foto" class="img-fluid img-thumbnail">
                                   </a>
                                <?php endif; ?>
                           </div>

                          <div class="col-md-7">
                            <input id="avatar" type="file"  name="avatar"  v-on:change="onFileChange" class="form-control">
                              <?php if($errors->has('avatar')): ?>
                                   <span class="form-text text-danger"><?php echo e($errors->first('avatar')); ?></span>
                               <?php endif; ?>
                        </div>
                    </div>
                </div>
                   <!--  Notas del Usuario -->
                 <div class="col-md-6 <?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                      <label for="description" class="col-md-5 control-label">Notas del usuario</label>
                      <textarea id="description" name="description" class="form-control"><?php echo e(old("description", $profile->description)); ?></textarea>
                       <?php if($errors->has('description')): ?>
                              <span class="form-text text-danger"><?php echo e($errors->first('description')); ?> </span>
                     <?php endif; ?>
                 </div>
          </div>
       </div>
        <!-- name y nickname -->
       <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
           <div class="form-row">
               <div class="col-md-6">
                   <label for="name">Nombre Completo</label>
                   <input class="form-control" id="name" type="text"  placeholder="Ingrese Nombre Completo" name="name" value="<?php echo e(old('name',$user->name)); ?>" required autofocus>
                   <?php if($errors->has('name')): ?>
                       <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
                   <?php endif; ?>
               </div>
               <div class="col-md-6<?php echo e($errors->has('nickname') ? ' has-error' : ''); ?>">
                   <label for="Nickname">Nombre corto</label>
                   <input class="form-control" id="nickname" type="text"  placeholder="Nickname" name="nickname" value="<?php echo e(old('nickname',$user->nickname)); ?>" required>
                   <?php if($errors->has('nickname')): ?>
                       <span class="form-text text-danger"><?php echo e($errors->first('nickname')); ?></span>
                   <?php endif; ?>
               </div>
           </div>
       </div>
        
        <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="Email">Correo Email</label>
                    <input class="form-control" id="email" type="email"  placeholder="Ingrese email" name="email" value="<?php echo e(old('email', $user->email)); ?>" required>
                    <?php if($errors->has('email')): ?>
                        <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 <?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
                    <label for="tipo" class="col-md-5">Seleccionar Tipo</label>
                    <?php echo Form::select('type',config('options.types'),null, ['class'=>'form-control','name'=>'type','value'=>"<?php echo e(old('type',$user->type)); ?>"]); ?>

                    <?php if($errors->has('type')): ?>
                        <span class="form-text text-danger"><?php echo e($errors->first('type')); ?> </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
  <!-- Usuario Bloqueado -->
     <div class="form-group">
         <div class="form-row">
            <div class="col-md-6 <?php echo e($errors->has('opciones') ? ' has-error' : ''); ?>">
              <label for="sw-bloqueado" class="col-md-5 control-label">Usuario Bloqueado?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="opciones" value="<?php echo e(old("active", $user->active)); ?>">
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="opciones"  value="<?php echo e(old("active", $user->active)); ?>">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <?php if($errors->has('opciones')): ?>
                    <span class="form-text text-danger"><?php echo e($errors->first('opciones')); ?> </span>
                <?php endif; ?>
            </div>
         </div>
     </div>



            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Actualizar perfil</button>
            </div>
         </form>
         </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    export default{

        data(){
            return {
                image: ''
            }
        },
        methods: {
            onFileChange(e) {
                alert('hola');
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            upload(){
                axios.post('/api/upload',{image: this.image}).then(response => {

                });
            }
        }
    }
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>