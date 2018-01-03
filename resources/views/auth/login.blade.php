@extends('layouts.loginlayout')

@section('content')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>S</b>GAJ</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log in</p> <!--Sing in para iniciar sesion-->

    <form action="{{ route('login') }}" method="POST">
     {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-16">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-16">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>


     <div class="row">
        <div class="col-xs-4">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordar
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
    </div>
    </form>

    <!--<a href="{{ route('password.request') }}">¿Olvidó su clave?</a><br>
    <a href="register.html" class="text-center">Registrar</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
