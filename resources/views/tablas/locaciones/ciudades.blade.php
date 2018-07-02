@extends('layouts.app')
@section('title',"Lista de Ciudades")
@section('content')
<div class="col-md-6">
    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <div class="Display4 float-left"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Ciudades</div>
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message')}}</p>
                @endif
            </div>
        </div>
         <ciudades-master></ciudades-master>
    </div>
</div>
@endsection

