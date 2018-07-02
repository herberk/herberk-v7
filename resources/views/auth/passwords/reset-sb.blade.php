<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reajustar Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Olvido su password?</h4>
          <p>Ingrese su dirección de correo electrónico y le enviaremos instrucciones sobre cómo restablecer su contraseña.</p>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
          {{ csrf_field() }}
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Ingrese casilla de correo" name="email" value="{{ $email or old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Reset Password</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="login.html">Login Page</a>
        </div>
      </div>
    </div>
  </div>

