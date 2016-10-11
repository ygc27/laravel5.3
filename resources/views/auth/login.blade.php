@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <img src="{{ asset('assets/img/logo.png')}}" class="img-responsive" />
        <a href="javascript:;"><b>Análise Dados</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg" style="font-weight: bold;">Digite seus dados de acesso</p>

        <form action="{{ url('/login') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Senha">

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Lembrar
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-key"></i> Acessar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a href="{{ url('/password/reset') }}" style="font-weight: bold;">Esqueci minha senha ?</a>
        &nbsp;|&nbsp;
        <a href="{{ url('/register') }}" style="font-weight: bold;"> Novo Cadastro</a>

        <br><br>
    </div>
    <!-- /.login-box-body -->
</div>
@endsection
