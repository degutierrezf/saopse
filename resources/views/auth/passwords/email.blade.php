@extends('layouts.auth')

@section('htmlheader_title')
    Password recovery
@endsection

@section('content')

    <body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <center><img src="/img/logo_saopse.png" alt=""></center>
            <a href="{{ url('/home') }}"><p>Gestor de Accidentes e Incidentes</p></a>
        </div><!-- /.login-logo -->

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
            <p class="login-box-msg">Reenviar Contraseña</p>
            <form action="{{ url('/password/email') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-warning btn-block btn-flat">Enviar datos al Correo</button>
                    </div><!-- /.col -->
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                </div>
            </form>
            <br>
            <a href="{{ url('/login') }}">Iniciar Sesión</a><br>

        </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->

    <center><strong>&copy; 2017 <a href="http://www.consultorait.cl">Consultora Informática Gutiérrez & Gutiérrez Ltda</a>.</strong></center>

    @include('layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
