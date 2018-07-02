@extends('layouts.app')
@section('title',"Lista de Giros")
@section('content')

<div class="container">
    <div class="card  mx-auto mt-sm-1">
        <div class="card-header"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Giros o actividades
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}}</p>
            @endif
        </div>
           <div class="panel-body">
               @include('tablas.partials.search')
               @include('tablas.partials.giros-tabla')
               {!! $giros->appends(Request::only(['name','type']))->setPath('')->render() !!}
          </div>
    </div>
</div>
@endsection