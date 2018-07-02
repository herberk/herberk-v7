<?php $__env->startSection('content'); ?>
 <h1>Tablas</h1>
  <hr>

 <div class="col-12">
     <div class="card card">
         <div class="card-header">
             <div class="clearfix">
                 <div class="Display4 float-left"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Regiones, Comunas y Ciudades. -  Categorias y Glosas  - Giros SII </div>
                 <?php if(Session::has('message')): ?>
                     <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                 <?php endif; ?>
             </div>
         </div>
         <?php echo Form::model($makeForm, ['method' => 'GET', 'class' => 'form', 'id' => 'search']); ?>

         <div class="form-row">
             <div class="col-sm-4">
                 <?php echo Field::select('region_id', $reg_com, null); ?>

             </div>
             <div class="col-sm-4">
                 <?php echo Field::select('comuna_id',$com_com, null, ['class' => 'form-control']); ?>

             </div>
             <div class="col-sm-4">
                 <?php echo Field::select('ciudad_id',$ciu_com, null, ['class' => 'form-control']); ?>

             </div>
         </div>
         <div class="form-row">
             <div class="col-4">
                     <?php echo Field::select('arti_id', $art[7], null,['label'=>'Instituciones Bancarias']); ?>

             </div>
             <div class="col-sm-4">
                 <?php echo Field::select('tipo_id', $tipo_com, null); ?>

             </div>
             <div class="col-sm-4">
                 <?php echo Field::select('atributo_id',$atri_com, null, ['class' => 'form-control']); ?>

             </div>
         </div>
         <div class="form-row">
             <div class="col-9">
                 <?php echo Field::text('giro', ['class' => 'easy-autocomplete','label'=>'Actividad o Giro SII']); ?>


             </div>
             <div class="col-sm-3">
               <?php echo Field::text('giro_codigo', null, ['id' => 'giro_codigo','label'=>'Codigo Giro SII','readonly']); ?>     
             </div>
        </div>
         <div class="form-row">
             <div class="col-3">
                 <?php echo Field::text('codigo', ['class' => 'easy-autocomplete','label'=>'Codigo Giro SII']); ?>

             </div>
             <div class="col-sm-9">
                 <?php echo Field::text('giro_des', null, ['id' => 'giro_des','label'=>'Giro a Actividad SII','readonly']); ?>        
             </div>
         </div>
        <?php echo Form::close(); ?>

     </div>
 </div>
 <p>Aqui pretendo que se puedan generar todos los reportes a PDF, Excel o pantalla que se relacionen con el modulo Tablas de datos .</p>

    <!-- Logout Modal-->
 <?php echo $__env->make('layouts.logout_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <script>
        $(document).ready(function () {
            $("#giro").easyAutocomplete({
                url: "/autocomplete/giros",
                getValue: "name",
                template: {
                    type: "description",
                    fields: {
                        description: "codigo"
                    }
                },

                list: {
                    match: {
                        enabled: true
                    },

                    onSelectItemEvent: function() {
                        var giro = $("#giro").getSelectedItemData();
                        $('#giro_codigo').val(giro.codigo);
                    },

                    // onClickEvent: function () {
                    //     var giro = $("#giro").getSelectedItemData();
                    //     window.location.href = '/giros/' + giro.id;
                    // }
                },

                theme: "bootstrap",

                ajaxSettings: {
                    dataType: "json",
                    method: "GET",
                    data: {
                    }
                },

           /*     preparePostData: function(data) {
                    data.term = $("#giro").val();
                    return data;
                },*/

                requestDelay: 500
            }).change(function () {
                $('#giro_codigo').val('');
            });
     });
  // busqueda por codiog

        $("#codigo").easyAutocomplete({
            url: "/autocomplete/codigogiros",
            getValue: "codigo",
            template: {
                type: "description",
                fields: {
                    description: "name"
                }
            },

            list: {
                match: {
                    enabled: true
                },

                onSelectItemEvent: function() {
                    var giro = $("#codigo").getSelectedItemData();
                    $('#giro_des').val(giro.name);
                },
            },
            theme: "bootstrap",

            ajaxSettings: {
                dataType: "json",
                method: "GET",
                data: {
                }
            },

        requestDelay: 500
        }).change(function () {
            $('#giro_des').val('');
        });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>