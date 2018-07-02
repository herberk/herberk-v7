<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Herberk</title>
        {{--<link rel="shortcut icon" type="image/png" href="/favicon.png"/>--}}
        <!-- Fonts -->
        {{--<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>--}}
       <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            #map {
                height: 650px;
                width: 100%;
            }
        </style>
        <style>
            header.masthead {
                position: relative;
                background-color: #343a40;
                background: url("../img/bg-masthead.jpg") no-repeat center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                padding-top: 12rem;
                padding-bottom: 16rem;
            }

            header.masthead .overlay {
                position: absolute;
                background-color: #212529;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                opacity: 0.3;
            }
        </style>
 </head>
  <body>
  <div id="app">
  {{--Barra ne navegacion--}}
 @include('landing.navbar_welcome')
<section id="home" name="home"></section>
@include('landing.Section_home')
  <br>
  <br>
  <section id="desc" name="desc"></section>
  <br>
  <br>
  <br>
@include('landing.section_descrip')
<section id="showcase" name="showcase"></section>
  <br>
  <br>
  <br>
@include('landing.Section_showcase')
  <br>
  <br>

 <section id="contact" name="contact"></section>
  <br>
  @include('landing.Section_contact')

  @include('landing.footer')
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('/js/app.js') }}"></script>

  <script>
      $('.carousel').carousel({
          interval: 2500
      })
  </script>
  </div>
    </body>
</html>
