@extends('layouts.app')
@section('title',"Lista de Empresas")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_empresas')
@endsection

@section('content')
    <div class="container">
        <!-- Modal -->
        {!! Form::model($empresas, ['route' => ['empresa/updatenota', $empresas], 'method' => 'PUT','class'=>"form-horizontal"]) !!}
           @include('empresas.partials.NoteModal')
        {!! Form::close() !!}
  </div>
@endsection
@section('script')
<script>
$('#NoteModalLong').modal('show');
</script>
@endsection
