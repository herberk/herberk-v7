@extends('landing.app')
@section('title',"Login")
@section('content')
    <body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group has-danger{{ $errors->has('email') ? ' has-error' : '' }}">

                        <label class="sr-only" for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <label for="email">Correo Electronico </label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="eassword">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="form-text text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Recordar Password</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Iniciar sesiòn </button>

                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('register') }}">Formulario de Registro</a>
                    <a class="d-block small" href="{{ route('password.request') }}">Olvido Password?</a>
                </div>
            </div>
        </div>
    </div>

@endsection
