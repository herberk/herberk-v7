@extends('layouts.app')
@section('sidebar')
    @parent
   @include('layouts.Menus.Sidebar_empresas')
@endsection
@section('content')
 <h1>Empresas</h1>
  <hr>
  <p>Aqui pretendo que se puedan generar todos los reportes a PDF Excel o pantalla que se relacionen con el modulo Empresas.</p>
 <div class="card-body">
     <div class="row">
         <div class="col=12" >
             <div class="col=6" >
                <a href="{{ route('empresaexcel') }}" class="btn btn-outline-success"><i class="fas fa-file-excel"></i> Exportar listado de empresas a Excel </a>
            </div>
             <div class="col=6  mt-4" >
                  <a href="{{ route('socioexcel') }}" class="btn  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar listado de socios a Excel </a>
             </div>
         </div>
     </div>
 </div>
    <!-- Logout Modal-->
 @include('layouts.logout_modal')
@endsection

