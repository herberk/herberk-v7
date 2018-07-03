<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php echo $__env->make('layouts.Menus.Sidebar_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
             <h1>Usuarios</h1>
            <hr>
            <p>Aqui pretendo que se puedan generar todos los reportes a PDF Excel o pantalla que se relacionen con el modulo USUARIOS.</p>
             <?php echo Form::open(['class' => 'form']); ?>

             <?php echo Field::text('user', ['class' => 'easy-autocomplete']); ?>

             <?php echo Field::text('user_id', null, ['id' => 'user_id']); ?>

             <?php echo Form::submit('Enviar', ['class' => 'btn btn-primary']); ?>

             <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo Html::script('assets/js/jquery.easy-autocomplete.js'); ?>


    <script>
        $(document).ready(function () {

            $("#user").easyAutocomplete({
                url: "/autocomplete/users",

                getValue: "name",

                template: {
                    type: "description",
                    fields: {
                        description: "email"
                    }
                },

                list: {
                    match: {
                        enabled: true
                    },

                   onSelectItemEvent: function() {
                        var user = $("#user").getSelectedItemData();

                        $('#user_id').val(user.id);
                    },

              /*      onClickEvent: function () {
                        var user = $("#user").getSelectedItemData();
                        window.location.href = '/users/' + user.id;
                    }*/
                },
                theme: "bootstrap",
                ajaxSettings: {
                    dataType: "json",
                    method: "GET",
                    data: {
                    }
                },

                preparePostData: function(data) {
                    data.term = $("#user").val();
                    return data;
                },

                requestDelay: 500
            }).change(function () {
                $('#user_id').val('');
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>