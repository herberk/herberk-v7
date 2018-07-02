@extends('layouts.app')
@section('title',"Lista de Socios")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_empresas')
@endsection
@section('content')
    <body class="bg-dark">
    <div class="container">
        @if (Session::has('message'))
            <div class="card  mx-auto mt-sm-0">
                <div class="alert alert-success" role="alert"> <i class="fas fa-building" style=color:#e4c40a></i><strong>  {{ Session::get('message')}}</strong>
            </div>
        @elseif (Session::has('deleted'))
            <div class="card  mx-auto mt-sm-0">
                <div class="alert alert-warning" role="alert"><i class="fas fa-building" style=color:#e4c40a></i><strong>
                        El Socio fue borrado, si desea deshacer el cambio <a href="{{ route('socio/restore', [Session::get('deleted')])}}">Click aqui</a></strong></div>
            </div>
        @else
           <div class="card  mx-auto mt-sm-0">
              <div class="card-header"> <i class="fas fa-building" style=color:#e4c40a></i><strong> Lista de Socios</strong>
           </div>
        @endif
                  <div class="card-body">
                      <div class="row">
                        <div class="col-7">
                            <a href="{{ route('socioexcel') }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
                            <a href="{{ url('socioscreate') }}" class="btn btn-sm  btn-outline-primary"><i class="fas fa-plus-square"></i> Nuevo Socio</a>
                        </div>
                        {{--@include('empresas.partials.search')--}}
                    </div>
                    <div class="table-responsive">
                        @include('empresas.socios.partials.tablesocio')
                        {{--{!! $empresas->appends(Request::only(['name','type']))->setPath('')->render() !!}--}}
                    </div>
                </div>
                <div class="card-footer small text-muted">Actualizado el: {{ 'date' }} 11:59 PM</div>
        </div>
     </div>

@endsection

