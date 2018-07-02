@extends('layouts.app')
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_user')
@endsection

@section('content')
             <h1>Usuarios</h1>
            <hr>
            <p>Aqui pretendo que se puedan generar todos los reportes a PDF Excel o pantalla que se relacionen con el modulo USUARIOS.</p>
             {!! Form::open(['class' => 'form']) !!}
             {!! Field::text('user', ['class' => 'easy-autocomplete']) !!}
             {!! Field::text('user_id', null, ['id' => 'user_id']) !!}
             {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
             {!! Form::close() !!}


@endsection
@section('script')
    {!! Html::script('assets/js/jquery.easy-autocomplete.js') !!}

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

@endsection