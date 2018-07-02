@extends('layouts.app')
@section('title',"Error")
@section('content')
    <h3 class="text-center">'Sorry '.{{ auth()->user()->name}} . '! Esta direccion no esxiste.';</h3>
    @include('layouts.logout_modal')
@endsection
