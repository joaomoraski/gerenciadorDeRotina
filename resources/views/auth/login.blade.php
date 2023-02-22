<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('vendor/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/sweetalert2/sweetalert2.css')}}">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ route('home') }}" class="h2">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Loga ai</p>
            {{--            @error('login')--}}
            {{--            <div class="alert alert-danger">{{ $message }}</div>--}}
            {{--            @enderror--}}

            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="form-control @error('login') is-invalid @enderror"
                           placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" required name="password" value="{{ old('password') }}"
                           class="form-control @error('login') is-invalid @enderror"
                           placeholder="Senha">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">
                                {{__('Lembrar de mim')}}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{__('Logar')}}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mb-1">
                <a href="{{ route('resetPassword') }}">{{__('Esqueceu sua Senha?')}}</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">{{__('Registre-se')}}</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('vendor/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script>
    $(function () {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        @error('login')
        // $('.swalDefaultError').click(function () {
        Toast.fire({
            icon: 'error',
            title: '{{ $message }}'
        })
        // });
        @enderror
        // $('.swalDefaultSuccess').click(function() {
        //     Toast.fire({
        //         icon: 'success',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });
        // $('.swalDefaultInfo').click(function() {
        //     Toast.fire({
        //         icon: 'info',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });
        // $('.swalDefaultWarning').click(function() {
        //     Toast.fire({
        //         icon: 'warning',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });
        // $('.swalDefaultQuestion').click(function() {
        //     Toast.fire({
        //         icon: 'question',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });
    });
</script>
</body>
</html>
