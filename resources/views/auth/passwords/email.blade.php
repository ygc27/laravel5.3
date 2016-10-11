@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <img src="{{ asset('assets/img/logo.png')}}" class="img-responsive" />
        <a href="javascript:;"><b>Análise Dados</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg" style="font-weight: bold;">Recuperação de Senha</p>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ url('/password/email') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="row">

                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-mail-forward fa-fw"></i> Enviar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <br>
        <a href="{{ url('/login') }}" style="font-weight: bold;">Fazer login</a><br>
    </div>

</div>
@endsection
