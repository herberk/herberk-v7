@extends('layouts.app')
@section('title',"Registro")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_user')
@endsection
@section('content')

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-sm-1">
      <div class="card-header"><i class="fas fa-user fa-fw" style=color:#15be0e></i> Formulario de Registroa</div>
      <div class="card-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="form-row">
              <div class="col-md-6">
                <label for="name">Nombre Completo</label>
                <input class="form-control" id="name" type="text"  placeholder="Ingrese Nombre Completo" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                  <span class="form-text text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
              <div class="col-md-6{{ $errors->has('nickname') ? ' has-error' : '' }}">
                <label for="Nickname">Nombre corto</label>
                <input class="form-control" id="nickname" type="text"  placeholder="Nickname" name="nickname" value="{{ old('nickname') }}" required>
              @if ($errors->has('nickname'))
                <span class="form-text text-danger">{{ $errors->first('nickname') }}</span>
              @endif
              </div>
            </div>

          </div>
          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="Email">Correo Email</label>
            <input class="form-control" id="email" type="email"  placeholder="Ingrese email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
              <span class="form-text text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Password">Password</label>
                <input class="form-control" id="password1" type="password" placeholder="Password"  name="password" required>
              </div>
              <div class="col-md-6">
                <label for="password-confirm">Confirmar password</label>
                <input class="form-control" id="password-confirm" type="password" placeholder="Confirm password" name="password_confirmation" required>
              </div>
              @if ($errors->has('password'))
                <span class="form-text text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
          </div>
        <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
          <div class="form-row">
            <label for="password" class="col-md-2 control-label">Captcha</label>
            <div class="col-md-4">
              <div class="captcha">
                <span>{!! captcha_img() !!}</span>
                <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
              </div>
            </div>
             <div class="col-md-6">
                <input id="captcha" type="text" class="form-control" placeholder="Ingrese Captcha" name="captcha"  required>
                @if ($errors->has('captcha'))
                   <span class="form-text text-danger">{{ $errors->first('captcha') }} </span>
                @endif
             </div>
           </div>
        </div>
            <button type="submit" class="btn btn-primary  btn-block">Registrarse </button>
       </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
          <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
 @endsection

@section('script')
    {{--Para Capcha--}}
    <script type="text/javascript">
        $(".btn-refresh").click(function(){
            $.ajax({
                type:'GET',
                url:'/refresh_captcha',
                success:function(data){
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endsection