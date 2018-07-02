@extends('landing.app')
@section('title',"Reajustar clave")
@section('content')

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reajustar Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Elvido su password?</h4>
          <p>Ingrese su dirección de correo electrónico y le enviaremos instrucciones sobre cómo restablecer su contraseña.</p>
        </div>
          <div class="panel-body">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                  {{ csrf_field() }}
           <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Ingrese correo electronico" name="email" value="{{ old('email') }}" required>
               @if ($errors->has('email'))
                   <span class="form-text text-danger">{{ $errors->first('email') }}</span>
               @endif
          </div>
          <a class="btn btn-primary btn-block"  type="submit">Reajustar Password</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('register') }}">Formulario de Registro</a>
          <a class="d-block small" href="{{ route('login') }}">Login Page</a>
        </div>
      </div>
    </div>
  </div>
@endsection
