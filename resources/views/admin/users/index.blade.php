@extends('layouts.app')
@section('title',"Lista de Usuarios")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_user')
@endsection
@section('content')
 <body class="bg-dark">
    <div class="container">
        <div class="card  mx-auto mt-sm-1">
            <div class="card-header"><i class="fas fa-user fa-fw" style=color:#15be0e></i> Lista de usuarios
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message')}}</p>
                @endif
                @if (Session::has('deleted'))
                    <div class="alert alert-warning" role="alert"> Usuario borrada, si desea deshacer el cambio <a href="{{ route('users/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
                @endif
                @if (Session::has('restored'))
                    <div class="alert alert-success" role="alert"> Usuario restaurado</div>
                @endif
            </div>
              <div class="card-body">
                    <div class="row">
                         <div class="col-7">
                             <a href="{{ route('usersxls') }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
                             <a href="{{ url('/usernew') }}" class="btn btn-sm  btn-outline-primary"><i class="fas fa-plus-square"></i> Nuevo Usuario</a>
                         </div>
                          @include('admin.users.partials.search')
                    </div>
                  <div class="table-responsive">
                    @include('admin.users.partials.table')
                    {!! $users->appends(Request::only(['name','type']))->setPath('')->render() !!}
                  </div>
              </div>
            <div class="card-footer small text-muted">Actualizado el: {{ 'date' }} 11:59 PM</div>
        </div>
    </div>
@endsection

