@extends('layouts.app')
@section('title',"Lista de Contactos")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_empresas')
@endsection
@section('content')
<div class="col-md-12">
    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <div class="Display6 float-left"><i class="fas fa-building" style=color:#e4c40a></i> Contactos</div>
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message')}}</p>
                @endif
            </div>
        </div>
         <empresa-contacto></empresa-contacto>
    </div>
</div>
@endsection

