@extends('layouts.app')
@section('title',"Cambiar Clave")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_user')
@endsection
@section('content')
    <div class="container">
        <div class="card card-login mx-auto mt-2">
            <div class="card-header"><i class="fas fa-user fa-fw" style=color:#15be0e></i> Formulario de Cambio Contraseña</div>
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}}</p>
            @endif
            <div class="card-body">
             @include('admin.users.partials.errors')
             @include('admin.users.partials.success')
                        <form class="form-horizontal" method="POST" action="{{ url('postpasschange') }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-6 control-label">@lang('passwords.current_password')</label>
                                    <input type="password" class="form-control" name="current_password">
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">@lang('passwords.new_password')</label>
                                    <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label class="col-md-7 control-label">@lang('passwords.password_confirmation')</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" style="margin-right: 15px;">
                                        @lang('passwords.change_button')
                                    </button>
                            </div>
                        </form>
         </div>
     </div>

    <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
    <div style="height: 20px;"></div>
@endsection