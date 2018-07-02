@extends('layouts.app')
@section('sidebar')
    @parent
   @include('layouts.Menus.Sidebar_empresas')
@endsection
@section('content')
 <h1>Empresas</h1>
  <hr>
                <p>Aqui pretendo que se puedan generar todos los reportes a PDF Excel o pantalla que se relacionen con el modulo eMPRESAS.</p>


    <!-- Logout Modal-->
 @include('layouts.logout_modal')
@endsection

