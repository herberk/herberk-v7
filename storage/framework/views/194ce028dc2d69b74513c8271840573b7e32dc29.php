<?php $__env->startSection('title',"Lista de Empresas"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_empresas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="modal fade bd-example-modal-lg" id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <?php echo $__env->make('empresas.socios.partials.editHeader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="modal-body">
                     <?php echo Form::model($socios, ['route' => ['socio/update', $socios], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

                        <?php echo $__env->make('empresas.socios.partials.sociosfields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                    <div class="modal-footer">

                        <?php echo $__env->make('empresas.socios.partials.EditButton', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(sumar());
     /* new Vue({
      el:'#app',
            data:{
                apopago:0,
                apopend:0
            }
        })*/

     // PARA VER EL MODAL
     $('#NoteModalLong').modal('show');

        // Sumar aportes pagados y pendientes y mostrar total
        function sumar() {
            var n1 = document.getElementById('apopago').value;
            var n2 = document.getElementById('apopend').value;
            var total = parseInt(n1) + parseInt(n2);
            document.getElementById('aporte').value=total;
        }

        // https://gist.github.com/rotvulpix/69a24cc199a4253d058c
        function checkRut(rut) {
            // Despejar Puntos
            var valor = rut.value.replace('.','');
            // Despejar Guión
            valor = valor.replace('-','');
            // Aislar Cuerpo y Dígito Verificador
            cuerpo = valor.slice(0,-1);
            dv = valor.slice(-1).toUpperCase();
            // Formatear RUN
            rut.value = cuerpo + '-'+ dv
            // Si no cumple con el mínimo ej. (n.nnn.nnn)
            if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
            // Calcular Dígito Verificador
            suma = 0;
            multiplo = 2;
            // Para cada dígito del Cuerpo
            for(i=1;i<=cuerpo.length;i++) {
                // Obtener su Producto con el Múltiplo Correspondiente
                index = multiplo * valor.charAt(cuerpo.length - i);
                // Sumar al Contador General
                suma = suma + index;
                // Consolidar Múltiplo dentro del rango [2,7]
                if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
            }
            // Calcular Dígito Verificador en base al Módulo 11
            dvEsperado = 11 - (suma % 11);
            // Casos Especiales (0 y K)
            dv = (dv == 'K')?10:dv;
            dv = (dv == 0)?11:dv;
            // Validar que el Cuerpo coincide con su Dígito Verificador
            if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
            // Si todo sale bien, eliminar errores (decretar que es válido)
            rut.setCustomValidity('');
        }
     </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>