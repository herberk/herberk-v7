@extends('layouts.app')
@section('title',"Lista de Empresas")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_empresas')
@endsection

@section('content')
    <div class="container">
        <!-- Modal -->
        {!! Form::model($socios, ['route' => ['socio/updatenota', $socios], 'method' => 'PUT','class'=>"form-horizontal"]) !!}
           @include('empresas.socios.partials.NoteModal')
        {!! Form::close() !!}
  </div>
@endsection
@section('script')
<script>
$('#NoteModalLong').modal('show');
</script>
@endsection
