@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <img src="{{ asset('assets/img/logo.png')}}" class="img-responsive" />
        <a href="javascript:;"><b>Análise Dados</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><b>Cadastre-se</b></p>

        <form action="{{ url('/register') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}" />

                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" />

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Senha" />

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme senha">

                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>

        <a href="{{ url('/login') }}">Login</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
@endsection
