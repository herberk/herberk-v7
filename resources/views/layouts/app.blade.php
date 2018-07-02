<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--title>{{ config('app.name', 'Laravel') }}</title-->
    <title>@yield('title') Herberk-v6</title>
    <link rel="shortcut icon" type="image/png" href="img/drawing.png"/>
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Datepicker Files  -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    {!! Html::style('assets/css/easy-autocomplete.css') !!}
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <style>
        body {
            padding-top: 55px;
        }
    </style>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        window.hebf = {
            errors: {!! json_encode($errors->toArray()) !!},
            user: {!! json_encode(auth()->user()) !!}
        };
    </script>
    @yield('style')
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div>
        @include('layouts.navbar')
        <div class="content-wrapper">
            <div class="container-fluid" id="app">
               @yield('content')
               <!-- Scroll to Top Button-->
                   <div style="height: 100px;"></div>
                   <!-- Scroll to Top Button-->
               @include('layouts.footer')
               <!-- Logout Modal-->
                @include('layouts.logout_modal')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    <script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easy-autocomplete.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript">
        //Cambiar el color de fono a blanco
        $('#toggleNavColor').click(function() {
            $('nav').toggleClass('navbar-dark navbar-light');
            $('nav').toggleClass('bg-dark bg-light');
            $('body').toggleClass('bg-dark bg-light');
        });

               // codigo de recarga  los select de regiones comunas
        $(document).ready(function () {
            $('#ciudad_id,#comuna_id,#region_id,#tipo_id,#atributo_id','#arti_id').select2({
                allowClear: true,
                placeholder: {
                    id: "",
                    text: 'Selecione valor'
                }
            });
            $.fn.populateSelect = function (values) {
                var options = '';
                $.each(values, function (key, row) {
                    options += '<option value="' + row.value + '">' + row.text + '</option>';
                });
                $(this).html(options);
            }
            $('#region_id').change(function () {
                $('#comuna_id').empty().change();
                var region_id = $(this).val();
                if (region_id == '') {
                    $('#comuna_id').empty().change();
                } else {
                    $.getJSON('comunas/'+region_id, null, function (values) {
                        $('#comuna_id').populateSelect(values);
                    });
                }
            });
            $('#tipo_id').change(function () {
                $('#atributo_id').empty().change();
                var tipo_id = $(this).val();
                if (tipo_id == '') {
                    $('#atributo_id').empty().change();
                } else {
                    $.getJSON('atributos/'+tipo_id, null, function (values) {
                        $('#atributo_id').populateSelect(values);
                    });
                }
            });
        });
    </script>
@yield('script')
</body>
</html>
